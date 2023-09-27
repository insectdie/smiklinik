

        var requestOptions = {
          method: 'GET',
          redirect: 'follow'
        };

        fetch("http://10.10.117.159:5188/api/status-keluarga", requestOptions)
          .then(response => response.text())
          .then(result => console.log(result))
          .catch(error => console.log('error', error));

        $(document).ready(function() {
 
          // $('#example').dataTable( {
          //     "processing": true,
          //     "serverSide": true,
          //     "ajax": {
          //         "url": "http://10.10.117.159:5188/api/status-keluarga",
          //         "type": "GET"
          //     },
          //     // "columns": [
          //     //     { "data": "id" },
          //     //     { "data": "statusKeluarga" },
          //     //     { "data": "status" },
          //     // ]
          //     "columns": [
          //         { "data": "id" },
          //         { "data": "statusKeluarga" },
          //         { "data": "status" },
          //     ]
          // });

          $('#example').dataTable( {
              "processing": true,
              "serverSide": true,
              "ajax": "http://localhost:8080/data.json",
              "columns": [
                  { "data": "id" },
                  { "data": "name" },
                  { "data": "position" },
              ]
          });

        });
