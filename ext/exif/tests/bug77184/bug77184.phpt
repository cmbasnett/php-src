--TEST--
Bug #74428 (Unsigned rational numbers are written out as signed rationals)
--SKIPIF--
<?php if (!extension_loaded('exif')) print 'skip exif extension not available';?>
--INI--
output_handler=
zlib.output_compression=0
--FILE--
<?php
$infile = dirname(__FILE__).'/DJI_0245_tiny.JPG';
var_dump(exif_read_data($infile));
?>
===DONE===
--EXPECTF--
array(63) {
  ["FileName"]=>
  string(17) "DJI_0245_tiny.JPG"
  ["FileDateTime"]=>
  int(1542931229)
  ["FileSize"]=>
  int(26001)
  ["FileType"]=>
  int(2)
  ["MimeType"]=>
  string(10) "image/jpeg"
  ["SectionsFound"]=>
  string(51) "ANY_TAG, IFD0, THUMBNAIL, EXIF, GPS, INTEROP, WINXP"
  ["COMPUTED"]=>
  array(10) {
    ["html"]=>
    string(20) "width="2" height="2""
    ["Height"]=>
    int(2)
    ["Width"]=>
    int(2)
    ["IsColor"]=>
    int(1)
    ["ByteOrderMotorola"]=>
    int(0)
    ["ApertureFNumber"]=>
    string(5) "f/4.5"
    ["Thumbnail.FileType"]=>
    int(2)
    ["Thumbnail.MimeType"]=>
    string(10) "image/jpeg"
    ["Thumbnail.Height"]=>
    int(112)
    ["Thumbnail.Width"]=>
    int(160)
  }
  ["ImageDescription"]=>
  string(7) "default"
  ["Make"]=>
  string(10) "Hasselblad"
  ["Model"]=>
  string(7) "L1D-20c"
  ["Orientation"]=>
  int(1)
  ["XResolution"]=>
  string(4) "72/1"
  ["YResolution"]=>
  string(4) "72/1"
  ["ResolutionUnit"]=>
  int(2)
  ["Software"]=>
  string(11) "GIMP 2.8.22"
  ["DateTime"]=>
  string(19) "2018:11:22 16:00:18"
  ["YCbCrPositioning"]=>
  int(1)
  ["Exif_IFD_Pointer"]=>
  int(398)
  ["GPS_IFD_Pointer"]=>
  int(20736)
  ["Comments"]=>
  string(7) "0.9.142"
  ["Keywords"]=>
  string(6) "single"
  ["THUMBNAIL"]=>
  array(8) {
    ["ImageWidth"]=>
    int(160)
    ["ImageLength"]=>
    int(112)
    ["Compression"]=>
    int(7)
    ["XResolution"]=>
    string(4) "72/1"
    ["YResolution"]=>
    string(4) "72/1"
    ["ResolutionUnit"]=>
    int(2)
    ["JPEGInterchangeFormat"]=>
    int(21000)
    ["JPEGInterchangeFormatLength"]=>
    int(632)
  }
  ["ExposureTime"]=>
  string(5) "1/120"
  ["FNumber"]=>
  string(7) "450/100"
  ["ExposureProgram"]=>
  int(2)
  ["ISOSpeedRatings"]=>
  int(100)
  ["ExifVersion"]=>
  string(4) "0230"
  ["DateTimeOriginal"]=>
  string(19) "2018:11:20 12:48:47"
  ["DateTimeDigitized"]=>
  string(19) "2018:11:20 12:48:47"
  ["ComponentsConfiguration"]=>
  string(4) " "
  ["ExposureBiasValue"]=>
  string(4) "0/10"
  ["MaxApertureValue"]=>
  string(9) "2971/1000"
  ["MeteringMode"]=>
  int(2)
  ["LightSource"]=>
  int(1)
  ["Flash"]=>
  int(0)
  ["FocalLength"]=>
  string(10) "10260/1000"
  ["MakerNote"]=>
  string(15) "[ae_dbg_info:"
  ["FlashPixVersion"]=>
  string(4) "0100"
  ["ColorSpace"]=>
  int(1)
  ["ExifImageWidth"]=>
  int(2)
  ["ExifImageLength"]=>
  int(2)
  ["InteroperabilityOffset"]=>
  int(20706)
  ["FileSource"]=>
  string(1) ""
  ["SceneType"]=>
  string(1) ""
  ["ExposureMode"]=>
  int(0)
  ["WhiteBalance"]=>
  int(0)
  ["DigitalZoomRatio"]=>
  string(3) "1/1"
  ["FocalLengthIn35mmFilm"]=>
  int(28)
  ["SceneCaptureType"]=>
  int(0)
  ["GainControl"]=>
  int(0)
  ["Contrast"]=>
  int(0)
  ["Saturation"]=>
  int(0)
  ["Sharpness"]=>
  int(0)
  ["DeviceSettingDescription"]=>
  string(4) "    "
  ["GPSVersion"]=>
  string(4) "  "
  ["GPSLatitudeRef"]=>
  string(1) "N"
  ["GPSLatitude"]=>
  array(3) {
    [0]=>
    string(4) "49/1"
    [1]=>
    string(4) "10/1"
    [2]=>
    string(18) "156691934/70000000"
  }
  ["GPSLongitudeRef"]=>
  string(1) "W"
  ["GPSLongitude"]=>
  array(3) {
    [0]=>
    string(5) "122/1"
    [1]=>
    string(4) "23/1"
    [2]=>
    string(19) "2672193571/70000000"
  }
  ["GPSAltitudeRef"]=>
  string(1) " "
  ["GPSAltitude"]=>
  string(6) "423/10"
  ["InterOperabilityIndex"]=>
  string(3) "R98"
  ["InterOperabilityVersion"]=>
  string(4) "0100"
}
===DONE===
