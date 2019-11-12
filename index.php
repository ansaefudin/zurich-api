<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="row">
            <h2>Upload your file here.!</h2>
        </div>

        <div class="row">
            <form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="csv">Pilih File CSV</label>
                    <input type="file" class="form-control-file" name="file" id="file" accept=".xml">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="parsing-data">
                    <label class="form-check-label" for="uid">Parsing Data</label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="create-uid">
                    <label class="form-check-label" for="uid">Generated UID</label>
                </div>
                <button type="submit" class="btn btn-primary" name="import" id="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST["import"])) {
    $xml_file = $_FILES["file"]["tmp_name"];
    $string = file_get_contents($xml_file);
	$xml = new SimpleXMLElement($string);
	var_dump($xml);
	echo "<br>";
	echo "<br>";
	echo $xml->LETTERCTL;
	echo "<br>";
	echo '<pre>' . var_export($xml, true) . '</pre>';
}
?>