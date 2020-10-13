 <?php
 // INCLUDE THE phpToPDF.php FILE
require("phpToPDF.php"); 

// PUT YOUR HTML IN A VARIABLE
$my_html="<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <title>Result</title>
    <link rel=\"stylesheet\" href=\"http://phptopdf.com/bootstrap.css\">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-6\">          
            <h3>Career Guidance</h3>
        </div>
        <div class=\"col-xs-6 text-right\">
          <h1>Result</h1>
          <h1><small>Result #001</small></h1>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-xs-5\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4>From: <a href=\"#\">Career Guidance</a></h4>
            </div>
            <div class=\"panel-body\">
              <p>
                Address: <h5><a href=\"#\">Bardoli,Surat</a></h5><br>
              </p>
            </div>
          </div>
        </div>
        <div class=\"col-xs-5 col-xs-offset-2 text-right\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4>To : <a href=\"#\">Akash</a></h4>
            </div>
            <div class=\"panel-body\">
              <p>
                Email: <h5><a href=\"#\">tandelakash90@gmail.com</a></h5><br>
                Phone: <h5><a href=\"#\">9574122890</a></h5><br>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>
              <h4>Exam</h4>
            </th>
            <th class=\"text-right\">
              <h4>Science</h4>
            </th>
            <th class=\"text-right\">
              <h4>Commerce</h4>
            </th>
            <th class=\"text-right\">
              <h4>Arts</h4>
            </th>
            <th class=\"text-right\">
              <h4>Vocatinal</h4>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Level1</td>
            <td class=\"text-right\">5.00</td>
            <td class=\"text-right\">10.00</td>
            <td class=\"text-right\">6.00</td>
            <td class=\"text-right\">10.00</td>
		
          </tr>
          <tr>
            <td>Level2</td>
            <td class=\"text-right\">5.00</td>
            <td class=\"text-right\">10.00</td>
            <td class=\"text-right\">6.00</td>
            <td class=\"text-right\">10.00</td>
			
          </tr>
		  <tr>
            <td><a href=\"#\">Total</a></td>
            <td class=\"text-right\"><a href=\"#\">10.00</a></td>
            <td class=\"text-right\"><a href=\"#\">20.00</a></td>
            <td class=\"text-right\"><a href=\"#\">12.00</a></td>
            <td class=\"text-right\"><a href=\"#\">20.00</a></td>
		
          </tr>
        </tbody>
      </table>

      <br><br>
      This is a sample Result.<br><br>
    </div>
	
  </body>
</html>";

// SET YOUR PDF OPTIONS -- FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'save',
  "save_directory" => '',
  "file_name" => 'pdf_invoice.pdf');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);

// OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
echo ("<a href='pdf_invoice.pdf'>Download Your PDF</a>");
?> 