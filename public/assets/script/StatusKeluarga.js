$(document).ready(function() {

  $('#example').dataTable( {
      "processing": true,
      "ajax": {
          "url": "http://10.10.117.159:5188/api/status-keluarga",
          "type": "GET",
          "dataType": "json",
      },
      "columns": [
          { "data": "id" },
          { "data": "statusKeluarga" },
          { "data": "status" }
      ]
  });

});
