import React, { useEffect, useState } from "react";
import { Dropzone, FileMosaic } from "@dropzone-ui/react";
import { DataGrid } from '@mui/x-data-grid';
import { Box } from "@mui/material";
import axios from 'axios';

function AdsenseSearch({ data }) {
  const [files, setFiles] = useState([]);
  const [rows, setRows] = useState(data); // Default rows (initial data)
  const [links, setLinks] = useState([]);

  // Update the files when selected
  const updateFiles = (acceptedFiles) => {
    setFiles(acceptedFiles);
  };

  // Log data changes, useEffect runs on data change
  useEffect(() => {
    console.log(data);
    // If the incoming data is different, update rows
    if (JSON.stringify(data) !== JSON.stringify(rows)) {
      setRows(data);
    }
  }, [data]); // Depend on data prop to update rows

  const handleUpload = async () => {
    if (files.length === 0) {
      alert('Please select files to upload');
      return;
    }

    const formData = new FormData();
    formData.append('file', files[0].file);

    try {
      const response = await axios.post('/adsense_search_import', formData, {
        headers: {
          'Content-Type': 'multipart/form-data',
        },
      });

      if (response.data.check) {
        // Successfully uploaded and imported data
        setRows(response.data.data); // Set the updated data
        alert('File uploaded successfully!');
      } else {
        alert('Error: ' + response.data.msg); // Display validation error from the backend
      }

      setFiles([]); // Clear the selected files
    } catch (error) {
      console.error('Error uploading files:', error);
      alert('An error occurred while uploading files');
    }
  };

  const formatCreatedAt = (dateString) => {
    const date = new Date(dateString);
    return date.toLocaleString();
  };

  const columns = [
    { field: "id", headerName: "#", width: 100 },
    { field: "link_id", headerName: "Link ID", flex: 1 },
    { field: "date", headerName: "Date", flex: 1 },
    { field: "request", headerName: "Request", flex: 1 },
    { field: "impressions", headerName: "Impressions", flex: 1 },
    { field: "ecpm", headerName: "eCPM", flex: 1 },
    { field: "clicks", headerName: "Clicks", flex: 1 },
    { field: "pub_revenue", headerName: "Pub Revenue", flex: 1 },
    { field: "unit_cost", headerName: "Unit Cost (USD)", flex: 1 },
    { field: "created_at", headerName: "Created At", width: 200, valueGetter: (params) => formatCreatedAt(params) },
    { field: "updated_at", headerName: "Updated At", width: 200, valueGetter: (params) => formatCreatedAt(params) },
  ];

  return (
    <>
      <div className="row">
        <div className="col-md-3">
          <Dropzone onChange={updateFiles} value={files}>
            {files.map((file) => (
              <FileMosaic {...file} preview />
            ))}
          </Dropzone>
          <button className="mt-2 btn btn-outline-primary" onClick={handleUpload}>
            Upload
          </button>
        </div>
      </div>

      <div className="row mt-3">
        <div className="col-12">
          <h4>Adsense Search Table</h4>
          <Box sx={{ width: '100%' }}>
            <DataGrid
              rows={rows}
              columns={columns}
              initialState={{
                pagination: {
                  paginationModel: { pageSize: 5 },
                },
              }}
              pageSizeOptions={[5]}
              checkboxSelection
              disableRowSelectionOnClick
            />
          </Box>
        </div>
      </div>
    </>
  );
}

export default AdsenseSearch;
