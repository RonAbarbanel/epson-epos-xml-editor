<?php
/*
Template Name: Add Activity
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>ePOS-Print Editor</title>

    <link type="text/css" href="epson/css/smoothness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
    <link type="text/css" href="epson/css/epos-print-editor.css" rel="stylesheet" />

    <script type="text/javascript" src="epson/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="epson/js/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="epson/js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="epson/js/epos-2.14.0.js"></script>
    <script type="text/javascript" src="epson/js/epos-print-editor-en.js"></script>
    <script type="text/javascript" src="epson/js/epos-print-editor.js"></script>
</head>
<body>

<div id="tabs">

    <ul>
        <li><a href="#edit">Edit</a></li>
        <li><a href="#preview">Preview</a></li>
        <li><a href="#api">API</a></li>
        <li><a href="#xml">XML</a></li>
        <li><a href="#print">Print</a></li>
        <li><a href="#setting">Setting</a></li>
    </ul>

    <div id="edit">
        <div id="edit-left">

            <div class="edit-category ui-state-default ui-corner-all">
                Common<br />
                <div class="edit-item">
                    <ul>
                        <!-- Alignment -->
                        <li class="epos-text-align edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-align.png" alt="text-align" /><br />
                                Align
                            </div>
                            <div class="edit-content">
                                Alignment
                                <select class="attr-text-align">
                                    <option value="ALIGN_LEFT" selected="selected">Left</option>
                                    <option value="ALIGN_CENTER">Center</option>
                                    <option value="ALIGN_RIGHT">Right</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Line Spacing -->
                        <li class="epos-text-linespc edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-linespc.png" alt="text-linespc" /><br />
                                Linespc
                            </div>
                            <div class="edit-content">
                                Line Spacing
                                <input class="attr-text-linespc" type="text" size="5" value="30" /> dots<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Upside-down -->
                        <li class="epos-text-rotate edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-rotate.png" alt="text-rotate" /><br />
                                Rotate
                            </div>
                            <div class="edit-content">
                                <label><input class="attr-text-rotate" type="checkbox" checked="checked" />Upside-down</label>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
               <div class="edit-break"></div>
            </div>

            <div class="edit-category ui-state-default ui-corner-all">
                Text (Printer Font)<br />
                <div class="edit-item">
                    <ul>
                        <!-- Language -->
                        <li class="epos-text-lang edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-lang.png" alt="text-lang" /><br />
                                Lang
                            </div>
                            <div class="edit-content">
                                Language
                                <select class="attr-text-lang">
                                    <option value="en" selected="selected">Alphanumeric</option>
                                    <option value="ja">Japanese</option>
                                    <option value="ja-ex">Japanese(SHIFT_JIS-2004)</option>
                                    <option value="ko">Korean</option>
                                    <option value="zh-cn">Simplified Chinese</option>
                                    <option value="zh-hans">Simplified Chinese [v2.2-]</option>
                                    <option value="zh-tw">Traditional Chinese</option>
                                    <option value="zh-hant">Traditional Chinese [v2.2-]</option>
                                    <option value="mul">Multi Language</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Font -->
                        <li class="epos-text-font edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-font.png" alt="text-font" /><br />
                                Font
                            </div>
                            <div class="edit-content">
                                Font
                                <select class="attr-text-font">
                                    <option value="FONT_A" selected="selected">Font A</option>
                                    <option value="FONT_B">Font B</option>
                                    <option value="FONT_C">Font C</option>
                                    <option value="FONT_D">Font D [v3.2-]</option>
                                    <option value="FONT_E">Font E [v3.2-]</option>
                                    <option value="FONT_SPECIAL_A">Special Font A</option>
                                    <option value="FONT_SPECIAL_B">Special Font B</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Horizontal Position -->
                        <li class="epos-text-position edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-position.png" alt="text-position" /><br />
                                Position
                            </div>
                            <div class="edit-content">
                                X Position
                                <input class="attr-text-x" type="text" size="5" value="0" /> dots<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Vertical Position -->
                        <li class="epos-text-vposition edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/text-vposition.png" alt="text-vposition" /><br />
                                Position
                                <span class="tooltip">[v3.0-]</span>
                            </div>
                            <div class="edit-content">
                                Y Position
                                <input class="attr-text-y" type="text" size="5" value="21" /> dots<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Smoothing -->
                        <li class="epos-text-smooth edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-smooth.png" alt="text-smooth" /><br />
                                Smooth
                            </div>
                            <div class="edit-content">
                                <label><input class="attr-text-smooth" type="checkbox" checked="checked" />Smoothing</label>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Size -->
                        <li class="epos-text-size edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-size.png" alt="text-size" /><br />
                                Size
                            </div>
                            <div class="edit-content">
                                Width
                                <input class="attr-text-width" type="text" size="5" value="1" ><div class="slider"></div>
                                Height
                                <input class="attr-text-height" type="text" size="5" value="1" ><div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Double -->
                        <li class="epos-text-double edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-double.png" alt="text-double" /><br />
                                Double
                            </div>
                            <div class="edit-content">
                                <label><input class="attr-text-dw" type="checkbox" checked="checked" />Double-width</label><br />
                                <label><input class="attr-text-dh" type="checkbox" checked="checked" />Double-height</label>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Style -->
                        <li class="epos-text-style edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text-style.png" alt="text-style" /><br />
                                Style
                            </div>
                            <div class="edit-content">
                                <label><input class="attr-text-reverse" type="checkbox" />White/Black Reverse</label>
                                <label><input class="attr-text-ul" type="checkbox" />Underline</label>
                                <label><input class="attr-text-em" type="checkbox" />Emphasized</label>
                                <br />
                                Color
                                <select class="attr-text-color">
                                    <option value="COLOR_NONE">None</option>
                                    <option value="COLOR_1" selected="selected">Color 1</option>
                                    <option value="COLOR_2">Color 2</option>
                                    <option value="COLOR_3">Color 3</option>
                                    <option value="COLOR_4">Color 4</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Text -->
                        <li class="epos-text edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/text.png" alt="text" /><br />
                                Text
                            </div>
                            <div class="edit-content">
                                <input class="attr-text-data tooltip-text" type="text" value="Hello\n" /><br />
                                <span class="tooltip">Horizontal Tab(HT): '\t', Line Feed(LF): '\n', Carriage Return(CR): '\r', Back Slash: '\\'</span>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-break"></div>
            </div>

            <div class="edit-category ui-state-default ui-corner-all">
                Paper Feed<br />
                <div class="edit-item">
                    <ul>
                        <!-- By Unit -->
                        <li class="epos-feed-unit edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/feed-unit.png" alt="feed-unit" /><br />
                                By Unit
                            </div>
                            <div class="edit-content">
                                Units
                                <input class="attr-feed-unit" type="text" size="5" value="30" /> dots<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- By Line -->
                        <li class="epos-feed-line edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/feed-line.png" alt="feed-line" /><br />
                                By Line
                            </div>
                            <div class="edit-content">
                                Lines
                                <input class="attr-feed-line" type="text" size="5" value="3" /> lines<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Line Feed -->
                        <li class="epos-feed edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/feed.png" alt="feed" /><br />
                                LF
                            </div>
                            <div class="edit-content">
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Label Paper -->
                        <li class="epos-feed-pos edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/feed-pos.png" alt="feed-pos" /><br />
                                Label<br />
                                <span class="tooltip">[v2.1-] TM-L90, TM-P60II, TM-P80, TM-P20</span>
                            </div>
                            <div class="edit-content">
                                Position
                                <select class="attr-feed-pos">
                                    <option value="FEED_PEELING">Peeling</option>
                                    <option value="FEED_CUTTING">Cutting</option>
                                    <option value="FEED_CURRENT_TOF" selected="selected">Current TOF</option>
                                    <option value="FEED_NEXT_TOF">Next TOF</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-break"></div>
            </div>

            <div class="edit-category ui-state-default ui-corner-all">
                Image<br />
                <div class="edit-item">
                    <ul>
                        <!-- Image -->
                        <li class="epos-image edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/image.png" alt="image" /><br />
                                Image
                            </div>
                            <div class="edit-content">
                                Image File (on the Server Side)<br />
                                <input class="attr-image-file tooltip-text" type="text" size="20" value="sample.png" />
                                <input class="attr-image-load" type="button" value="Load" />
                                <br />
                                <span class="tooltip">The file must be in the same domain as the current Web page.</span>
                                <img class="attr-image" src="epson/img/default.png" alt="" />
                                <br />
                                <label><input class="attr-image-fit" type="checkbox" value="" />Scale to Fit Paper Width</label>
                                <br />
                                Mode
                                <select class="attr-image-mode">
                                    <option value="MODE_MONO" selected="selected">Monochrome</option>
                                    <option value="MODE_GRAY16">Grayscale (only for supported models)</option>
                                </select>
                                <br />
                                Brightness
                                <input class="attr-image-brightness" type="text" size="5" value="1.0" /><div class="slider"></div>
                                Color (Monochrome)
                                <select class="attr-image-color">
                                    <option value="COLOR_NONE">None</option>
                                    <option value="COLOR_1" selected="selected">Color 1</option>
                                    <option value="COLOR_2">Color 2</option>
                                    <option value="COLOR_3">Color 3</option>
                                    <option value="COLOR_4">Color 4</option>
                                </select>
                                <br />
                                Halftone (Monochrome)
                                <select class="attr-image-halftone">
                                    <option value="HALFTONE_DITHER">Dither</option>
                                    <option value="HALFTONE_ERROR_DIFFUSION" selected="selected">Error Diffusion</option>
                                    <option value="HALFTONE_THRESHOLD">Threshold</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- NV Logo -->
                        <li class="epos-logo edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/logo.png" alt="logo" /><br />
                                NV Logo
                            </div>
                            <div class="edit-content">
                                Keycode 1
                                <input class="attr-logo-key1" type="text" size="5" value="48" /><div class="slider"></div>
                                Keycode 2
                                <input class="attr-logo-key2" type="text" size="5" value="48" /><div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-break"></div>
            </div>

            <div class="edit-category ui-state-default ui-corner-all">
                Bar Code<br />
                <div class="edit-item">
                    <ul>
                        <!-- Bar Code -->
                        <li class="epos-barcode edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/barcode.png" alt="barcode" /><br />
                                Barcode
                            </div>
                            <div class="edit-content">
                                Data
                                <input class="attr-barcode-data tooltip-text" type="text" size="20" value="12345" /><br />
                                <span class="tooltip">Hexadecimal: '\x00'-'\xff', Horizontal Tab(HT): '\t', Line Feed(LF): '\n', Carriage Return(CR): '\r', Back Slash: '\\'</span>
                                Type
                                <select class="attr-barcode-type">
                                    <option value="BARCODE_UPC_A">UPC-A</option>
                                    <option value="BARCODE_UPC_E">UPC-E</option>
                                    <option value="BARCODE_EAN13">EAN13</option>
                                    <option value="BARCODE_JAN13">JAN13</option>
                                    <option value="BARCODE_EAN8">EAN8</option>
                                    <option value="BARCODE_JAN8">JAN8</option>
                                    <option value="BARCODE_CODE39" selected="selected">CODE39</option>
                                    <option value="BARCODE_ITF">ITF</option>
                                    <option value="BARCODE_CODABAR">CODABAR</option>
                                    <option value="BARCODE_CODE93">CODE93</option>
                                    <option value="BARCODE_CODE128">CODE128</option>
                                    <option value="BARCODE_CODE128_AUTO">CODE128_Auto</option>
                                    <option value="BARCODE_GS1_128">GS1-128</option>
                                    <option value="BARCODE_GS1_DATABAR_OMNIDIRECTIONAL">GS1 DataBar Omnidirectional</option>
                                    <option value="BARCODE_GS1_DATABAR_TRUNCATED">GS1 DataBar Truncated</option>
                                    <option value="BARCODE_GS1_DATABAR_LIMITED">GS1 DataBar Limited</option>
                                    <option value="BARCODE_GS1_DATABAR_EXPANDED">GS1 Databar Expanded</option>
                                </select>
                                <br />
                                HRI
                                <select class="attr-barcode-hri">
                                    <option value="HRI_NONE" selected="selected">None</option>
                                    <option value="HRI_ABOVE">Above</option>
                                    <option value="HRI_BELOW">Below</option>
                                    <option value="HRI_BOTH">Both</option>
                                </select>
                                <br />
                                Font
                                <select class="attr-barcode-font">
                                    <option value="FONT_A" selected="selected">Font A</option>
                                    <option value="FONT_B">Font B</option>
                                    <option value="FONT_C">Font C</option>
                                    <option value="FONT_D">Font D [v3.2-]</option>
                                    <option value="FONT_E">Font E [v3.2-]</option>
                                    <option value="FONT_SPECIAL_A">Special Font A</option>
                                    <option value="FONT_SPECIAL_B">Special Font B</option>
                                </select>
                                <br />
                                Module Width
                                <input class="attr-barcode-width" type="text" size="5" value="2" /> dots<div class="slider"></div>
                                Module Height
                                <input class="attr-barcode-height" type="text" size="5" value="32" /> dots<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Symbol -->
                        <li class="epos-symbol edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/symbol.png" alt="symbol" /><br />
                                Symbol
                            </div>
                            <div class="edit-content">
                                Data
                                <input class="attr-symbol-data tooltip-text" type="text" size="20" value="http://www.epson.com/" /><br />
                                <span class="tooltip">Hexadecimal: '\x00'-'\xff', Horizontal Tab(HT): '\t', Line Feed(LF): '\n', Carriage Return(CR): '\r', Back Slash: '\\'</span>
                                Type
                                <select class="attr-symbol-type">
                                    <option value="SYMBOL_PDF417_STANDARD" selected="selected">Standard PDF417</option>
                                    <option value="SYMBOL_PDF417_TRUNCATED">Truncated PDF417</option>
                                    <option value="SYMBOL_QRCODE_MODEL_1">QR Code Model 1</option>
                                    <option value="SYMBOL_QRCODE_MODEL_2">QR Code Model 2</option>
                                    <option value="SYMBOL_QRCODE_MICRO">Micro QR Code [v4.1-]</option>
                                    <option value="SYMBOL_MAXICODE_MODE_2">MaxiCode Mode 2</option>
                                    <option value="SYMBOL_MAXICODE_MODE_3">MaxiCode Mode 3</option>
                                    <option value="SYMBOL_MAXICODE_MODE_4">MaxiCode Mode 4</option>
                                    <option value="SYMBOL_MAXICODE_MODE_5">MaxiCode Mode 5</option>
                                    <option value="SYMBOL_MAXICODE_MODE_6">MaxiCode Mode 6</option>
                                    <option value="SYMBOL_GS1_DATABAR_STACKED">GS1 DataBar Stacked</option>
                                    <option value="SYMBOL_GS1_DATABAR_STACKED_OMNIDIRECTIONAL">GS1 DataBar Stacked Omnidirectional</option>
                                    <option value="SYMBOL_GS1_DATABAR_EXPANDED_STACKED">GS1 DataBar Expanded Stacked</option>
                                    <option value="SYMBOL_AZTECCODE_FULLRANGE">Aztec Code Full-Range [v2.2-]</option>
                                    <option value="SYMBOL_AZTECCODE_COMPACT">Aztec Code Compact [v2.2-]</option>
                                    <option value="SYMBOL_DATAMATRIX_SQUARE">DataMatrix Square [v2.2-]</option>
                                    <option value="SYMBOL_DATAMATRIX_RECTANGLE_8">DataMatrix Rectangle (Row=8) [v2.2-]</option>
                                    <option value="SYMBOL_DATAMATRIX_RECTANGLE_12">DataMatrix Rectangle (Row=12) [v2.2-]</option>
                                    <option value="SYMBOL_DATAMATRIX_RECTANGLE_16">DataMatrix Rectangle (Row=16) [v2.2-]</option>
                                </select>
                                <br />
                                Error Correction Level
                                <select class="attr-symbol-level-enum">
                                    <option value="LEVEL_0">PDF417 Level 0</option>
                                    <option value="LEVEL_1">PDF417 Level 1</option>
                                    <option value="LEVEL_2">PDF417 Level 2</option>
                                    <option value="LEVEL_3">PDF417 Level 3</option>
                                    <option value="LEVEL_4">PDF417 Level 4</option>
                                    <option value="LEVEL_5">PDF417 Level 5</option>
                                    <option value="LEVEL_6">PDF417 Level 6</option>
                                    <option value="LEVEL_7">PDF417 Level 7</option>
                                    <option value="LEVEL_8">PDF417 Level 8</option>
                                    <option value="LEVEL_L">QR Code Level L</option>
                                    <option value="LEVEL_M">QR Code Level M</option>
                                    <option value="LEVEL_Q">QR Code Level Q</option>
                                    <option value="LEVEL_H">QR Code Level H</option>
                                    <option value="LEVEL_DEFAULT" selected="selected">Default Level</option>
                                </select>
                                <br />
                                Error Correction Level (Aztec Code)
                                <input class="attr-symbol-level" type="text" size="5" value="23" /><div class="slider"></div>
                                Module Width
                                <input class="attr-symbol-width" type="text" size="5" value="3" /> dots<div class="slider"></div>
                                Module Height (PDF417)
                                <input class="attr-symbol-height" type="text" size="5" value="0" /> times<div class="slider"></div>
                                Symbol Size (PDF417, GS1 DataBar)
                                <input class="attr-symbol-size" type="text" size="5" value="0" /> columns, dots<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-break"></div>
            </div>

            <div class="edit-category ui-state-default ui-corner-all hidden">
                Line<br />
                <div class="edit-item hidden">
                    <ul>
                        <!-- Horizontal -->
                        <li class="epos-hline edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/hline.png" alt="hline" /><br />
                                HLine<br />
                                <span class="tooltip">Only for supported models</span>
                            </div>
                            <div class="edit-content">
                                X Start Position
                                <input class="attr-hline-x1" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                X End Position
                                <input class="attr-hline-x2" type="text" size="5" value="575" /> dots<div class="slider"></div>
                                Style
                                <select class="attr-hline-style">
                                    <option value="LINE_THIN" selected="selected">Single: Thin</option>
                                    <option value="LINE_MEDIUM">Single: Medium</option>
                                    <option value="LINE_THICK">Single: Thick</option>
                                    <option value="LINE_THIN_DOUBLE">Double: Thin</option>
                                    <option value="LINE_MEDIUM_DOUBLE">Double: Medium</option>
                                    <option value="LINE_THICK_DOUBLE">Double: Thick</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item hidden">
                    <ul>
                        <!-- Vertical (Start) -->
                        <li class="epos-vline-begin edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/vline-begin.png" alt="vline-begin" /><br />
                                Start<br />
                                <span class="tooltip">Only for supported models</span>
                            </div>
                            <div class="edit-content">
                                X Start Position
                                <input class="attr-vline-x" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                Style
                                <select class="attr-vline-style">
                                    <option value="LINE_THIN" selected="selected">Single: Thin</option>
                                    <option value="LINE_MEDIUM">Single: Medium</option>
                                    <option value="LINE_THICK">Single: Thick</option>
                                    <option value="LINE_THIN_DOUBLE">Double: Thin</option>
                                    <option value="LINE_MEDIUM_DOUBLE">Double: Medium</option>
                                    <option value="LINE_THICK_DOUBLE">Double: Thick</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item hidden">
                    <ul>
                        <!-- Vertical (End) -->
                        <li class="epos-vline-end edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/vline-end.png" alt="vline-end" /><br />
                                End<br />
                                <span class="tooltip">Only for supported models</span>
                            </div>
                            <div class="edit-content">
                                X End Position
                                <input class="attr-vline-x" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                Style
                                <select class="attr-vline-style">
                                    <option value="LINE_THIN" selected="selected">Single: Thin</option>
                                    <option value="LINE_MEDIUM">Single: Medium</option>
                                    <option value="LINE_THICK">Single: Thick</option>
                                    <option value="LINE_THIN_DOUBLE">Double: Thin</option>
                                    <option value="LINE_MEDIUM_DOUBLE">Double: Medium</option>
                                    <option value="LINE_THICK_DOUBLE">Double: Thick</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-break"></div>
            </div>

            <div class="edit-category ui-state-default ui-corner-all">
                Page Mode<br />
                <div class="edit-item">
                    <ul>
                        <!-- Start -->
                        <li class="epos-page-begin edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/page-begin.png" alt="page-begin" /><br />
                                Start
                            </div>
                            <div class="edit-content">
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Print Area -->
                        <li class="epos-area edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/area.png" alt="area" /><br />
                                Area
                            </div>
                            <div class="edit-content">
                                X Origin
                                <input class="attr-area-x" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                Y Origin
                                <input class="attr-area-y" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                Width
                                <input class="attr-area-width" type="text" size="5" value="100" /> dots<div class="slider"></div>
                                Height
                                <input class="attr-area-height" type="text" size="5" value="100" /> dots<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Direction -->
                        <li class="epos-direction edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/direction.png" alt="direction" /><br />
                                Direction
                            </div>
                            <div class="edit-content">
                                Direction
                                <select class="attr-direction-dir">
                                    <option value="DIRECTION_LEFT_TO_RIGHT" selected="selected">Left To Right</option>
                                    <option value="DIRECTION_TOP_TO_BOTTOM">Top To Bottom</option>
                                    <option value="DIRECTION_RIGHT_TO_LEFT">Right To Left</option>
                                    <option value="DIRECTION_BOTTOM_TO_TOP">Bottom To Top</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Print Position -->
                        <li class="epos-position edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/position.png" alt="position" /><br />
                                Position
                            </div>
                            <div class="edit-content">
                                X Position
                                <input class="attr-position-x" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                Y Position
                                <input class="attr-position-y" type="text" size="5" value="21" /> dots<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Line -->
                        <li class="epos-line edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/line.png" alt="line" /><br />
                                Line<br />
                                <span class="tooltip">TM-T88VI, TM-P60II, TM-P80, TM-P20, TM-T20III, TM-T82III, TM-m10, TM-m30, TM-m30II, TM-m30II-H, TM-m50</span>
                            </div>
                            <div class="edit-content">
                                X Start Position
                                <input class="attr-line-x1" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                Y Start Position
                                <input class="attr-line-y1" type="text" size="5" value="50" /> dots<div class="slider"></div>
                                X End Position
                                <input class="attr-line-x2" type="text" size="5" value="99" /> dots<div class="slider"></div>
                                Y End Position
                                <input class="attr-line-y2" type="text" size="5" value="50" /> dots<div class="slider"></div>
                                Style
                                <select class="attr-line-style">
                                    <option value="LINE_THIN" selected="selected">Single: Thin</option>
                                    <option value="LINE_MEDIUM">Single: Medium</option>
                                    <option value="LINE_THICK">Single: Thick</option>
                                    <option value="LINE_THIN_DOUBLE">Double: Thin</option>
                                    <option value="LINE_MEDIUM_DOUBLE">Double: Medium</option>
                                    <option value="LINE_THICK_DOUBLE">Double: Thick</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Rectangle -->
                        <li class="epos-rectangle edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/rectangle.png" alt="rectangle" /><br />
                                Rect<br />
                                <span class="tooltip">TM-T88VI, TM-P60II, TM-P80, TM-P20, TM-T20III, TM-T82III, TM-m10, TM-m30, TM-m30II, TM-m30II-H, TM-m50</span>
                            </div>
                            <div class="edit-content">
                                X Start Position
                                <input class="attr-rectangle-x1" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                Y Start Position
                                <input class="attr-rectangle-y1" type="text" size="5" value="0" /> dots<div class="slider"></div>
                                X End Position
                                <input class="attr-rectangle-x2" type="text" size="5" value="99" /> dots<div class="slider"></div>
                                Y End Position
                                <input class="attr-rectangle-y2" type="text" size="5" value="99" /> dots<div class="slider"></div>
                                Style
                                <select class="attr-rectangle-style">
                                    <option value="LINE_THIN" selected="selected">Single: Thin</option>
                                    <option value="LINE_MEDIUM">Single: Medium</option>
                                    <option value="LINE_THICK">Single: Thick</option>
                                    <option value="LINE_THIN_DOUBLE">Double: Thin</option>
                                    <option value="LINE_MEDIUM_DOUBLE">Double: Medium</option>
                                    <option value="LINE_THICK_DOUBLE">Double: Thick</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- End -->
                        <li class="epos-page-end edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/page-end.png" alt="page-end" /><br />
                                End
                            </div>
                            <div class="edit-content">
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-break"></div>
            </div>

            <div class="edit-category ui-state-default ui-corner-all">
                Batch Print<br />
                <div class="edit-item">
                    <ul>
                        <!-- Rotate Start -->
                        <li class="epos-rotate-begin edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/rotate-begin.png" alt="rotate-begin" /><br />
                                Rotate S<br />
                                <span class="tooltip">TM-m30II, TM-m30II-H, TM-m50</span>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Rotate End -->
                        <li class="epos-rotate-end edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/rotate-end.png" alt="rotate-end" /><br />
                                Rotate E<br />
                                <span class="tooltip">TM-m30II, TM-m30II-H, TM-m50</span>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-break"></div>
            </div>

            <div class="edit-category ui-state-default ui-corner-all">
                Others<br />
                <div class="edit-item">
                    <ul>
                        <!-- Paper Cutting -->
                        <li class="epos-cut edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/cut.png" alt="cut" /><br />
                                Cut
                            </div>
                            <div class="edit-content">
                                Type
                                <select class="attr-cut-type">
                                    <option value="CUT_NO_FEED">No Feed</option>
                                    <option value="CUT_FEED" selected="selected">Feed</option>
                                    <option value="CUT_RESERVE">Reserve</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Drawer Kick-out -->
                        <li class="epos-pulse edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/pulse.png" alt="pulse" /><br />
                                Drawer
                            </div>
                            <div class="edit-content">
                                Connector
                                <select class="attr-pulse-drawer">
                                    <option value="DRAWER_1" selected="selected">Pin 2</option>
                                    <option value="DRAWER_2">Pin 5</option>
                                </select>
                                <br />
                                ON Time
                                <select class="attr-pulse-time">
                                    <option value="PULSE_100" selected="selected">100 ms</option>
                                    <option value="PULSE_200">200 ms</option>
                                    <option value="PULSE_300">300 ms</option>
                                    <option value="PULSE_400">400 ms</option>
                                    <option value="PULSE_500">500 ms</option>
                                </select>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Buzzer -->
                        <li class="epos-sound edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/sound.png" alt="sound" /><br />
                                Buzzer
                                <span class="tooltip">TM-T88VI, TM-T88V, TM-T70II, TM-P60II, TM-P80, TM-P20, TM-T20, TM-T20II, TM-T20III, TM-T82II, TM-T82III, TM-T83II, TM-U330, TM-m10, TM-m30, TM-m30II, TM-m30II-H, TM-m50</span>
                            </div>
                            <div class="edit-content">
                                Pattern
                                <select class="attr-sound-pattern">
                                    <option value="PATTERN_NONE">None</option>
                                    <option value="PATTERN_0">Pattern 0 [v5.0-]</option>
                                    <option value="PATTERN_1">Pattern 1 [v2.2-]</option>
                                    <option value="PATTERN_2">Pattern 2 [v2.2-]</option>
                                    <option value="PATTERN_3">Pattern 3 [v2.2-]</option>
                                    <option value="PATTERN_4">Pattern 4 [v2.2-]</option>
                                    <option value="PATTERN_5">Pattern 5 [v2.2-]</option>
                                    <option value="PATTERN_6">Pattern 6 [v2.2-]</option>
                                    <option value="PATTERN_7">Pattern 7 [v2.2-]</option>
                                    <option value="PATTERN_8">Pattern 8 [v2.2-]</option>
                                    <option value="PATTERN_9">Pattern 9 [v2.2-]</option>
                                    <option value="PATTERN_10">Pattern 10 [v2.2-]</option>
                                    <option value="PATTERN_A" selected="selected">Pattern A</option>
                                    <option value="PATTERN_B">Pattern B</option>
                                    <option value="PATTERN_C">Pattern C</option>
                                    <option value="PATTERN_D">Pattern D</option>
                                    <option value="PATTERN_E">Pattern E</option>
                                    <option value="PATTERN_ERROR">Pattern For Error</option>
                                    <option value="PATTERN_PAPER_END">Pattern For Paper-end</option>
                                </select>
                                <br />
                                Repeat
                                <input class="attr-sound-repeat" type="text" size="5" value="1" /><div class="slider"></div>
                                Cycle (Pattern 0-10)
                                <input class="attr-sound-cycle" type="text" size="5" value="1000" /> ms<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Layout -->
                        <li class="epos-layout edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/layout.png" alt="layout" /><br />
                                Layout
                                <span class="tooltip">[v2.2-] TM-P60II, TM-P80, TM-P20</span>
                            </div>
                            <div class="edit-content">
                                Paper Type
                                <select class="attr-layout-type">
                                    <option value="LAYOUT_RECEIPT" selected="selected">Receipt</option>
                                    <option value="LAYOUT_RECEIPT_BM">Receipt (Black Mark)</option>
                                    <option value="LAYOUT_LABEL">Die Cut Label Paper</option>
                                    <option value="LAYOUT_LABEL_BM">Die Cut Label Paper (Black Mark)</option>
                                </select>
                                <br />
                                Paper Width (Liner Width) (sf)
                                <input class="attr-layout-width" type="text" size="5" value="58.0" /> mm<div class="slider"></div>
                                Height (sa)
                                <label><input class="attr-layout-height-auto" type="radio" checked="checked" />Automatic</label>
                                <label><input class="attr-layout-height-auto" type="radio" />Manual</label>
                                <input class="attr-layout-height" type="text" size="5" value="28.4" /> mm<div class="slider"></div>
                                Top Margin (sb)
                                <input class="attr-layout-margin-top" type="text" size="5" value="0.0" /> mm<div class="slider"></div>
                                Bottom Margin (se)
                                <input class="attr-layout-margin-bottom" type="text" size="5" value="0.0" /> mm<div class="slider"></div>
                                Offset to Cutting Position (sc)
                                <input class="attr-layout-offset-cut" type="text" size="5" value="0.0" /> mm<div class="slider"></div>
                                Offset to Label Bottom Edge Position (sd)
                                <input class="attr-layout-offset-label" type="text" size="5" value="0.0" /> mm<div class="slider"></div>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Recovery -->
                        <li class="epos-recovery edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/recovery.png" alt="recovery" /><br />
                                Recovery
                                <span class="tooltip">[v3.0-]</span>
                            </div>
                            <div class="edit-content">
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Reset -->
                        <li class="epos-reset edit-icon ui-state-default">
                            <div class="edit-caption tooltip-text">
                                <img src="epson/img/reset.png" alt="reset" /><br />
                                Reset
                                <span class="tooltip">[v3.0-]</span>
                            </div>
                            <div class="edit-content">
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-item">
                    <ul>
                        <!-- Command -->
                        <li class="epos-command edit-icon ui-state-default">
                            <div class="edit-caption">
                                <img src="epson/img/command.png" alt="command" /><br />
                                Cmd
                            </div>
                            <div class="edit-content">
                                <input class="attr-command-data tooltip-text" type="text" value="\x1b*\x21\x01\x00\x55\x55\x55\n" /><br />
                                <span class="tooltip">Hexadecimal: '\x00'-'\xff', Horizontal Tab(HT): '\t', Line Feed(LF): '\n', Carriage Return(CR): '\r', Back Slash: '\\'</span>
                            </div>
                            <div class="edit-remove">
                                <button>Delete</button>
                            </div>
                            <div class="edit-break"></div>
                        </li>
                    </ul>
                </div>
                <div class="edit-break"></div>
            </div>
        </div>

        <div id="edit-right">
            <ul id="edit-sequence">
            </ul>
            <div id="edit-button">
                <input id="edit-force" type="checkbox" /><label class="edit-label" for="edit-force">Forced Transmission [v3.0-]</label>
                <button id="edit-import">Import</button>
                <button id="edit-clear">Clear</button>
            </div>
        </div>

        <div class="edit-break"></div>

    </div>

    <div id="import" title="Import">
        <p>
            Data to be import (ePOS-Print XML)<br />
            <textarea id="import-doc" cols="30" rows="10" placeholder="&lt;epos-print xmlns=&quot;http://www.epson-pos.com/schemas/2011/03/epos-print&quot;&gt;&lt;text lang=&quot;en&quot; smooth=&quot;true&quot;&gt;Hello&lt;/text&gt;&lt;feed /&gt;&lt;/epos-print&gt;"></textarea><br />
            <button id="import-apply">Apply</button>
        </p>
        <p>
            Information<br />
            <textarea id="import-info" cols="30" rows="8"></textarea><br />
        </p>
    </div>

    <div id="import-confirm" title="Confirmation">
        <p>Data you are editing will be deleted. Do you want to continue?</p>
    </div>

    <div id="edit-confirm" title="Confirmation">
        <p>Are you sure you want to delete the data you are editing?</p>
    </div>

    <div id="edit-error" title="Error">
        <p id="edit-info"></p>
    </div>

    <div id="preview">
        <div id="preview-paper">
            <div id="preview-width">
                <span>512</span><br />
                <img src="epson/img/v.png" alt="" /><img src="epson/img/h.png" width="510" height="10" alt="" /><img src="epson/img/v.png" alt="" /><br />
            </div>
        </div>
        <div class="preview-break"></div>
        <canvas id="preview-rotate" width="576" height="2400"></canvas>
        <canvas class="preview-line" id="preview-line" width="1" height="1"></canvas>
        <canvas id="preview-text" width="576" height="192"></canvas>
        <canvas id="preview-page" width="576" height="2400"></canvas>
        <canvas id="preview-area" width="576" height="2400"></canvas>
        <br />
        <br />
        <br />
        <br />
        <br />
        <div id="preview-info">
            Actual print result from the printer may differ from the preview image.
        </div>
    </div>

    <div id="api">
        <p>
            ePOS-Print API Sample Code
            <textarea id="api-code" cols="60" rows="30"></textarea>
        </p>
    </div>

    <div id="xml">
        <p>
            ePOS-Print XML Print Document<br />
            <textarea id="xml-doc" cols="60" rows="30"></textarea>
        </p>
    </div>

    <div id="print">
        <p>
            Data to be sent (ePOS-Print XML)<br />
            <textarea id="print-doc" cols="60" rows="12"></textarea><br />
            <button id="print-send">Send</button>
        </p>
        <p>
            Information<br />
            <textarea id="print-info" cols="60" rows="10"></textarea><br />
            <button id="print-clear">Clear</button>
        </p>
    </div>

    <div id="setting">
        <h3>Preview</h3>
        <p>
            Model, Paper width (Liner width)<br />
            <select id="setting-model">
                <option value="tm_t88_80" selected="selected">TM-T88 series (80mm)</option>
                <option value="tm_t88_58">TM-T88 series (58mm)</option>
                <option value="tm_t70_80">TM-T70 series (80mm)</option>
                <option value="tm_t70_m8">TM-T70 series (Multi-language, 80mm)</option>
                <option value="tm_t70_m5">TM-T70 series (Multi-language, 58mm)</option>
                <option value="tm_t90_80">TM-T90 series (80mm)</option>
                <option value="tm_t90_60">TM-T90 series (60mm)</option>
                <option value="tm_t90_58">TM-T90 series (58mm)</option>
                <option value="tm_l90_re">TM-L90 (Receipt)</option>
                <option value="tm_l90_la">TM-L90 (Label)</option>
                <option value="tm_p60_60">TM-P60 series (60mm)</option>
                <option value="tm_p60_58">TM-P60 series (58mm)</option>
                <option value="tm_p60_la">TM-P60 series (Label)</option>
                <option value="tm_p80_48">TM-P80 series(80mm)</option>
                <option value="tm_p80_42">TM-P80 series(80mm, 42 column mode)</option>
                <option value="tm_p20_58">TM-P20 series(58mm)</option>
                <option value="tm_t20_80">TM-T20 series(80mm)</option>
                <option value="tm_t20_58">TM-T20 series(58mm)</option>
                <option value="tm_t20_80">TM-T82 series (80mm)</option>
                <option value="tm_t20_58">TM-T82 series (58mm)</option>
                <option value="tm_t83_80">TM-T83 series (80mm)</option>
                <option value="tm_t83_58">TM-T83 series (58mm)</option>
                <option value="tm_u22_76">TM-U220 (76mm)</option>
                <option value="tm_u22_70">TM-U220 (70mm)</option>
                <option value="tm_u22_58">TM-U220 (58mm)</option>
                <option value="tm_u33_76">TM-U330 (76mm)</option>
                <option value="tm_u33_70">TM-U330 (70mm)</option>
                <option value="tm_u33_58">TM-U330 (58mm)</option>
                <option value="tm_h60_re">TM-H6000 series (Receipt)</option>
                <option value="tm_m10_58">TM-m10 series (58mm)</option>
                <option value="tm_m30_80">TM-m30 series (80mm)</option>
                <option value="tm_m30_58">TM-m30 series (58mm)</option>
                <option value="tm_m50_80">TM-m50 series (80mm)</option>
                <option value="tm_m50_58">TM-m50 series (58mm)</option>
            </select>
            <span class="hidden">
                <input id="setting-width" type="text" maxlength="2" size="2" value="80" />mm
            </span>
        </p>
        <br />
        <h3>Print</h3>
        <p>
            IP address of ePOS-Print supported printer<br />
            <input id="setting-ipaddr" type="text" value="192.168.192.168" />
        </p>
        <p>
            Device ID of the target printer<br />
            <input id="setting-devid" type="text" value="local_printer" />
        </p>
        <p>
            Print timeout (milliseconds)<br />
            <input id="setting-timeout" type="text" value="60000" />
        </p>
        <p>
            <input id="setting-status" type="checkbox" /><label for="setting-status">Monitor the status</label><br />
            &nbsp;&nbsp;&nbsp;Drawer open status
            <select id="setting-drawer">
                <option value="low" selected="selected">Low</option>
                <option value="high">High</option>
            </select>
        </p>
        <p>
            <input id="setting-jobid" type="checkbox" /><label for="setting-jobid">Use print job ID [v4.1-]</label>
        </p>
        <p>
            <input id="setting-https" type="checkbox" /><label for="setting-https">Use HTTPS</label>
        </p>
        <br />
        <br />
        <br />
        <div id="setting-version">
            ePOS-Print Editor Version 5.0.5E Copyright&copy; SEIKO EPSON CORPORATION 2020. All rights reserved.<br />
            This web page is using <a href="http://jqueryui.com/">jQuery UI</a> and <a href="http://touchpunch.furf.com/">jQuery UI Touch Punch</a>.<br />
        </div>
    </div>

    <canvas class="hidden" id="epos-image" width="1" height="1"></canvas>

</div>

</body>
</html>