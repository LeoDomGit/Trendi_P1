import React, { useState } from "react";
import ReactDOM from "react-dom";
import { Dropzone, FileMosaic } from "@dropzone-ui/react";
import { DataGrid } from '@mui/x-data-grid';
import { Box, Select, Switch, Typography } from "@mui/material";
import axios from 'axios';
function Index({data_links,data_reports}) {
    const [files, setFiles] = useState([]);
    const updateFiles = (acceptedFiles) => {
      setFiles(acceptedFiles);
    };

    const handleUpload = async () => {
        if (files.length === 0) {
          alert('Please select files to upload');
          return;
        }
        console.log(files[0].file);

        const formData = new FormData();
        formData.append('file', files[0].file);
        try {
          const response = await axios.post('/upload', formData, {
            headers: {
              'Content-Type': 'multipart/form-data',
            },
          });
          alert('Files uploaded successfully!');
          setLinks(response.data.links);
          setReports(response.data.reports);
        } catch (error) {
          console.error('Error uploading files:', error);
          alert('An error occurred while uploading files');
        }
      };
    const [links,setLinks]=useState(data_links);
    const [reports,setReports]=useState(data_reports);
    const formatCreatedAt = (dateString) => {
        const date = new Date(dateString);
        return date.toLocaleString();
    };
    const columns = [
        {
          field: "id",
          headerName: "#",
          width: 100,
          renderCell: (params) => params.row.id,
        },
        {
          field: "subject",
          headerName: "Subject",
          editable: false,
          flex: 1,
        },
        {
          field: "link",
          headerName: "Link",
          editable: false,
          flex: 1,
        },
        {
          field: "date_created",
          headerName: "Date Created",
          width: 200,
          valueGetter: (params) => formatCreatedAt(params),
        },
        {
          field: "update_dashboard",
          headerName: "Update Dashboard",
          editable: false,
          flex: 1,
        },
        {
          field: "fb_camp_date",
          headerName: "FB Campaign Date",
          editable: false,
          flex: 1,
        },
        {
            field: "status",
            headerName: "Status",
            editable: false,
            flex: 1,
          },
        {
          field: "created_at",
          headerName: "Created At",
          width: 200,
          valueGetter: (params) => formatCreatedAt(params),
        },
      ];
      const columns2 = [
        {
          field: "id",
          headerName: "#",
          width: 100,
          renderCell: (params) => params.row.id,
          editable: false,
        },
        {
          field: "timestamp",
          headerName: "Timestamp",
          width: 200,
          valueGetter: (params) => formatCreatedAt(params),
          editable: false,
        },
        {
          field: "query",
          headerName: "Query",
          editable: false,
          flex: 1,
        },
        {
          field: "referrer",
          headerName: "Referrer",
          editable: false,
          flex: 1,
        },
        {
          field: "lpurl",
          headerName: "LP URL",
          editable: false,
          flex: 1,
        },
        {
          field: "ip",
          headerName: "IP",
          editable: false,
          flex: 1,
        },
        {
          field: "event",
          headerName: "Event",
          editable: false,
          flex: 1,
        },
        {
          field: "iframeSrc",
          headerName: "Iframe Src",
          editable: false,
          flex: 1,
        },
        {
          field: "fbclid",
          headerName: "FBCLID",
          editable: false,
          flex: 1,
        },
        {
          field: "track_id",
          headerName: "Track ID",
          editable: false,
          flex: 1,
        },
        {
          field: "gads",
          headerName: "GADS",
          editable: false,
          flex: 1,
        },
        {
          field: "page",
          headerName: "Page",
          editable: false,
          flex: 1,
        },
        {
          field: "ny",
          headerName: "NY",
          editable: false,
          flex: 1,
        },
        {
          field: "rs",
          headerName: "RS",
          editable: false,
          flex: 1,
        },
        {
          field: "clkt",
          headerName: "CLKT",
          editable: false,
          flex: 1,
        },
        {
          field: "nx",
          headerName: "NX",
          editable: false,
          flex: 1,
        },
        {
          field: "nm",
          headerName: "NM",
          editable: false,
          flex: 1,
        },
        {
          field: "rsToken",
          headerName: "RS Token",
          editable: false,
          flex: 1,
        },
        {
          field: "site",
          headerName: "Site",
          editable: false,
          flex: 1,
        },
        {
          field: "is",
          headerName: "IS",
          editable: false,
          flex: 1,
        },
        {
          field: "locale",
          headerName: "Locale",
          editable: false,
          flex: 1,
        },
        {
          field: "nb",
          headerName: "NB",
          editable: false,
          flex: 1,
        },
        {
          field: "slug",
          headerName: "Slug",
          editable: false,
          flex: 1,
        },
        {
          field: "rurl",
          headerName: "RURL",
          editable: false,
          flex: 1,
        },
        {
          field: "category",
          headerName: "Category",
          editable: false,
          flex: 1,
        },
        {
          field: "sheetsname",
          headerName: "Sheets Name",
          editable: false,
          flex: 1,
        },
        {
          field: "sfnsn",
          headerName: "SFNSN",
          editable: false,
          flex: 1,
        },
        {
          field: "referrer2",
          headerName: "Referrer 2",
          editable: false,
          flex: 1,
        },
        {
          field: "qsrc",
          headerName: "QSRC",
          editable: false,
          flex: 1,
        },
        {
          field: "gtm_debug",
          headerName: "GTM Debug",
          editable: false,
          flex: 1,
        },
        {
          field: "utm_id",
          headerName: "UTM ID",
          editable: false,
          flex: 1,
        },
        {
          field: "utm_campaign",
          headerName: "UTM Campaign",
          editable: false,
          flex: 1,
        },
        {
          field: "utm_content",
          headerName: "UTM Content",
          editable: false,
          flex: 1,
        },
        {
          field: "utm_term",
          headerName: "UTM Term",
          editable: false,
          flex: 1,
        },
        {
          field: "utm_source",
          headerName: "UTM Source",
          editable: false,
          flex: 1,
        },
        {
          field: "utm_medium",
          headerName: "UTM Medium",
          editable: false,
          flex: 1,
        },
        {
          field: "src",
          headerName: "Source",
          editable: false,
          flex: 1,
        },
        {
          field: "from",
          headerName: "From",
          editable: false,
          flex: 1,
        },
        {
          field: "created_at",
          headerName: "Created At",
          width: 200,
          valueGetter: (params) => formatCreatedAt(params),
          editable: false,
        },
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
                    <button className="mt-2 btn btn-outline-primary"  onClick={(e)=>handleUpload()}>Upload</button>
                </div>
            </div>
            <div className="row mt-3">
                <div className="col-12">
                    <h4>Links table</h4>
                <Box sx={{ height: 400, width: '100%' }}>
                <DataGrid
                  rows={links}
                  columns={columns}
                  initialState={{
                    pagination: {
                      paginationModel: {
                        pageSize: 5,
                      },
                    },
                  }}
                  pageSizeOptions={[5]}
                  checkboxSelection
                  disableRowSelectionOnClick
                />
              </Box>
              <Box sx={{ height: 400, width: '100%' }}>
              <h4>Links reports</h4>
              <DataGrid
                  rows={reports}
                  columns={columns2}
                  initialState={{
                    pagination: {
                      paginationModel: {
                        pageSize: 5,
                      },
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

export default Index;
