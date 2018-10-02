<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="Tri Utami Pramudya" />
      <meta name="company" content="Microsoft" />
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:1pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:1pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:1pt; background-color:white }
      td.style1 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style1 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style3 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style3 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style4 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style5 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style5 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style6 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style6 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style8 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style8 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style10 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style11 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style11 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style12 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style12 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style13 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style13 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style14 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style14 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style15 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style15 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style16 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style16 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style18 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style18 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:#D8D8D8 }
      th.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:#D8D8D8 }
      td.style22 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:#D8D8D8 }
      th.style22 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:#D8D8D8 }
      td.style23 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:#D8D8D8 }
      th.style23 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:#D8D8D8 }
      td.style24 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:2pt; background-color:white }
      th.style24 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style25 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style25 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style26 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style27 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style27 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style28 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style28 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style30 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#D8D8D8 }
      th.style33 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#D8D8D8 }
      td.style34 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#D8D8D8 }
      th.style34 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#D8D8D8 }
      td.style35 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:9pt; background-color:#D8D8D8 }
      th.style35 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Arial'; font-size:8pt; background-color:#D8D8D8 }
      td.style36 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style36 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style37 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style37 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style39 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style40 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style41 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style41 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style42 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style42 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style43 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style43 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style44 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style47 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style47 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style48 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style48 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style49 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style49 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style50 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style50 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style51 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style51 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style52 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style55 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style56 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style56 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style57 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style58 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style58 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style59 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style59 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style60 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style60 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      th.style63 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:9pt; background-color:white }
      td.style64 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style64 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style65 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style65 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style66 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style66 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1 #000000; border-right:none #000000; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#FFFFFF; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style68 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style68 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style69 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:#BDD6EE }
      th.style69 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:#BDD6EE }
      td.style70 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:1pt; background-color:white }
      th.style70 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:1pt; background-color:white }
      table.sheet0 col.col0 { width:63.03333261pt }
      table.sheet0 col.col1 { width:63.03333261pt }
      table.sheet0 col.col2 { width:63.03333261pt }
      table.sheet0 col.col3 { width:60.9999993pt }
      table.sheet0 col.col4 { width:58.96666599pt }
      table.sheet0 col.col5 { width:57.61111045pt }
      table.sheet0 col.col6 { width:63.03333261pt }
      table.sheet0 col.col7 { width:58.28888822pt }
      table.sheet0 col.col8 { width:43.37777728pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:19.5pt }
      table.sheet0 tr.row1 { height:19.5pt }
      table.sheet0 tr.row2 { height:19.5pt }
      table.sheet0 tr.row3 { height:21pt }
      table.sheet0 tr.row4 { height:3pt }
      table.sheet0 tr.row5 { height:19.5pt }
      table.sheet0 tr.row6 { height:30.75pt }
      table.sheet0 tr.row7 { height:18pt }
      table.sheet0 tr.row8 { height:18pt }
      table.sheet0 tr.row9 { height:20.25pt }
      table.sheet0 tr.row10 { height:16.5pt }
      table.sheet0 tr.row11 { height:16.5pt }
      table.sheet0 tr.row12 { height:16.5pt }
      table.sheet0 tr.row13 { height:18pt }
      table.sheet0 tr.row14 { height:26.25pt }
      table.sheet0 tr.row15 { height:24pt }
      table.sheet0 tr.row16 { height:21.75pt }
      table.sheet0 tr.row17 { height:22.5pt }
      table.sheet0 tr.row18 { height:22.5pt }
      table.sheet0 tr.row19 { height:22.5pt }
      table.sheet0 tr.row20 { height:21pt }
      table.sheet0 tr.row21 { height:23.25pt }
      table.sheet0 tr.row22 { height:24pt }
      table.sheet0 tr.row23 { height:24pt }
      table.sheet0 tr.row24 { height:24pt }
      table.sheet0 tr.row25 { height:18.75pt }
      table.sheet0 tr.row26 { height:14.25pt }
      table.sheet0 tr.row27 { height:14.25pt }
      table.sheet0 tr.row28 { height:14.25pt }
      table.sheet0 tr.row29 { height:14.25pt }
      table.sheet0 tr.row30 { height:14.25pt }
      table.sheet0 tr.row31 { height:14.25pt }
      table.sheet0 tr.row32 { height:24pt }
      table.sheet0 tr.row34 { height:14.25pt }
      table.sheet0 tr.row35 { height:14.25pt }
      table.sheet0 tr.row36 { height:14.25pt }
      table.sheet0 tr.row37 { height:14.25pt }
      table.sheet0 tr.row38 { height:14.25pt }
      table.sheet0 tr.row39 { height:14.25pt }
      table.sheet0 tr.row40 { height:14.25pt }
      table.sheet0 tr.row41 { height:16.5pt }
      table.sheet0 tr.row43 { height:17.25pt }
      table.sheet0 tr.row44 { height:17.25pt }
      table.sheet0 tr.row47 { height:22.5pt }
      table.sheet0 tr.row48 { height:29.25pt }
      table.sheet0 tr.row49 { height:29.25pt }
      table.sheet0 tr.row50 { height:29.25pt }
      table.sheet0 tr.row51 { height:10.5pt }
      table.sheet0 tr.row52 { height:10pt }
      table.sheet0 tr.row53 { height:10pt }
      table.sheet0 tr.row54 { height:26.25pt }
      table.sheet0 tr.row55 { height:15pt }
      table.sheet0 tr.row56 { height:15pt }
      table.sheet0 tr.row57 { height:15pt }
      table.sheet0 tr.row58 { height:15pt }
    </style>
    <style>
    #wrapper {
      width: 800px;

      margin: 0 auto;
    }
    </style>
    <link rel="stylesheet" type="text/css" media="print" href="print.css" />
  </head>

  <body id="wrapper">
<style>
@page { margin-left: 0.25in; margin-right: 0.25in; margin-top: 0.25in; margin-bottom: 0.25in; }
body { margin-left: 0.25in; margin-right: 0.25in; margin-top: 0.25in; margin-bottom: 0.25in; }
</style>

<div class="col-sm-12">

    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0" width="900px">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <tbody>
          <tr class="row0">
            <td class="column0 style67 null style67" rowspan="3">

<div style="position: relative;"><img style="position: absolute; z-index: 1; left: 25px; top: -30px; width: 45px; height: 65px;" src="{{ asset('img/image001.png') }}" border="0" /></div></td>
            <td class="column1 style64 s style64" colspan="6">PT PLN (PERSERO) AREA SERPONG</td>
            <td class="column7 style68 null style68" rowspan="3">
<div style="position: relative;"><img style="position: absolute; z-index: 1; left: 26px; top: -30px; width: 43px; height: 65px;" src="{{ asset('img/image003.png') }}" border="0" /></div></td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row1">
            <td class="column1 style65 s style65" colspan="5">FORMULIR SURAT IZIN KERJA/JOB SAFETY ANALYSIS</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row2">
            <td class="column1 style66 s style66" colspan="6">FM-SMK3-030</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row4">
            <td class="column0 style2 null"></td>
            <td class="column1 style2 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row3">
            <td class="column0 style69 s style69" colspan="8">Tanggal Berlaku: {{ $tanggal }}</td>

          </tr>

          <tr class="row5">
            <td class="column0 style21 s style23" colspan="5">A. Aplikasi</td>
            <td class="column5 style36 s style38" colspan="3">Permit No: {{ $permit }}</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row6">
            <td class="column0 style1 s">Pekerjaan Umum <br>
              @if ($a1=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
            </td>
            <td class="column1 style1 s">Ruang Tertutup<br>
              @if ($a2=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif  </td>
            <td class="column2 style1 s">Pengangkatan Kritikal<br>
              @if ($a3=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif </td>
            <td class="column3 style1 s">Kerja Panas<br>
              @if ($a4=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif </td>
            <td class="column4 style1 s">Penggalian<br>
              @if ($a5=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif </td>
            <td class="column5 style1 s">Listrik<br>
              @if ($a6=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif </td>
            <td class="column6 style1 s">Bekerja di Ketinggian<br>
              @if ($a7=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif </td>
            <td class="column7 style1 s">Lain-Lain<br>
              @if ($a8=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif </td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row7">
            <td class="column0 style15 s">Lokasi</td>
            <td class="column1 style52 null style54" colspan="5" style="text-align:left">{{$lokasi}}</td>
            <td class="column6 style15 s">Tanggal</td>
            <td class="column7 style12 null">{{$tanggal}}</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row8">
            <td class="column0 style15 s">Pemohon</td>
            <td class="column1 style52 null style54" colspan="7" style="text-align:left">{{$pemohon}}</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row9">
            <td class="column0 style21 s style23" colspan="5">B. DESKRIPSI KERJA</td>
            <td class="column5 style21 s style23" colspan="3">Jenis Peralatan (Tandai yang Sesuai)</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row10">
            <td class="column0 style55 null style63" colspan="5" rowspan="3">{{ $des }}</td>
            <td class="column5 style47 s style49" colspan="3">
              @if ($b1=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Mesin </td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row11">
            <td class="column5 style47 s style49" colspan="3">
              @if ($b2=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Listrik</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row12">
            <td class="column5 style47 s style49" colspan="3">
              @if ($b3=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Peralatan Tangan</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row13">
            <td class="column0 style21 s style23" colspan="8">C. BAHAYA YANG MUNGKIN TERJADI (Tandai yang Sesuai)</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row14">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c1=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Lantai Licin</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c12=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Pekerjaan di<br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atas Kepala</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c23=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Orang Masuk<br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanpa Izin</td>
            <td class="column6 style24 s style26" colspan="2">
              @if ($c34=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Terhantam Benda</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row15">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c2=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Bahaya Kebakaran</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c13=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Gas</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c24=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Gelap (Malam)</td>
            <td class="column6 style24 s style26" colspan="2">
              @if ($c35=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Lantai yang<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berlubang</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row16">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c3=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Percikan Palu</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c14=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Jepit/Perangkap</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c25=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Cuaca Buruk</td>
            <td class="column6 style24 s style26" colspan="2">
              @if ($c36=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Tepian Bangunan</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row17">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c4=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Penanganan Radioaktif</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c15=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Bahaya Cedera<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tulang Belakang</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c26=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Ergonomic</td>
            <td class="column6 style24 s style26" colspan="2">
              @if ($c37=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Percikan/Leburan<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Besi Panas</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row18">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c5=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Jalan darurat</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c16=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Tersandung/Jatuh</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c27=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Kejatuhan Benda<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atau Material</td>
            <td class="column6 style24 s style26" colspan="2">
              @if ($c38=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Asap</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row19">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c6=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Polusi Alam</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c17=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Salah Penyetelan</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c28=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Lingkungan yang<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesak</td>
            <td class="column6 style24 s style26" colspan="2">
              @if ($c39=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Benda Tajam</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row20">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c7=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Debu</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c18=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Keseleo</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c29=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Beban Berat</td>
            <td class="column6 style24 s style26" colspan="2">
              @if ($c40=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Bising</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row21">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c8=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Kegagalan Peralatan</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c19=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Ketinggian</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c30=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Tangga yang<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tidak Kokoh</td>
            <td class="column6 style24 s style26" colspan="2">
              @if ($c41=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Vibrasi/Getaran</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row22">
            <td class="column0 style50 s style51" colspan="2">
              @if ($c9=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Kegagalan Struktur/<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alat Bantu</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c20=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Pekerjaan Lain yang<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terdekat</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c31=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Berangin</td>
            <td class="column6 style24 s style26" colspan="2">
  <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
  &nbsp;&nbsp;&nbsp;………………………..</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row23">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c10=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Bahan Alat Listrik</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c21=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Sambungan Selang<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Gas/Tekanan)</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c32=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Tabrakan/Benturan<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Benda yang Bergerak</td>
            <td class="column6 style24 s style26" colspan="2">
  <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
  &nbsp;&nbsp;&nbsp;………………………..</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row24">
            <td class="column0 style24 s style26" colspan="2">
              @if ($c11=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Obyek Ayunan</td>
            <td class="column2 style24 s style26" colspan="2">
              @if ($c22=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;Tindakan dari<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pihak Ketiga</td>
            <td class="column4 style24 s style26" colspan="2">
              @if ($c33=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
  &nbsp;&nbsp;&nbsp;Salah Komunikasi</td>
            <td class="column6 style24 s style26" colspan="2">
  <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
  &nbsp;&nbsp;&nbsp;………………………..</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row25">
            <td class="column0 style21 s style23" colspan="8">D. TINDAKAN PENCEGAHAN YANG DILAKUKAN SEBELUM DAN SEMASA KERJA (Tandai yang Sesuai)</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row26">
            <td class="column0 style36 s style38" colspan="4">
              @if ($d1=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Proteksi/Perlindungan Dari Jauh</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($d7=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Rambu-rambu</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row27">
            <td class="column0 style36 s style38" colspan="4">
              @if ($d2=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Pemadam Api/Kebakaran</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($d8=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Body System</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row28">
            <td class="column0 style36 s style38" colspan="4">
              @if ($d3=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Selimut Penghambat Api/Percikan</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($d9=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Penyinaran yang Menuaskan</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row29">
            <td class="column0 style36 s style38" colspan="4">
              @if ($d4=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Pintu Masuk/Pintu Keluar</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($d10=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Sertifikat Kompetensi</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row30">
            <td class="column0 style36 s style38" colspan="4">
              @if ($d5=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Penyangga</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($d11=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Wajib Mengikuti Penjelasan JSA</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row31">
            <td class="column0 style36 s style38" colspan="4">
              @if ($d6=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;Pagar/Barikade</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($d12=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Lain-Lain</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row32">
            <td class="column0 style47 s style49" colspan="8">Tindakan Keselamatan Lain yang Diperlukan:</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row33">
            <td class="column0 style21 s style23" colspan="8">E. ALAT PELINDUNG DIRI (Tandai yang Sesuai)</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row34">
            <td class="column0 style36 s style38" colspan="4">
            @if ($e1=='on')
              <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
              @else
              <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
            @endif
            &nbsp;&nbsp;&nbsp;Helm Keselamatan</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($e8=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Sarung Tangan Kulit</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row35">
            <td class="column0 style36 s style38" colspan="4">
              @if ($e2=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;SepatuKeselamatan</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($e9=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Baju Kulit</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row36">
            <td class="column0 style36 s style38" colspan="4">
              @if ($e3=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Kacamata Keselamatan</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($e10=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Rompi Keselamatan</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row37">
            <td class="column0 style36 s style38" colspan="4">
              @if ($e4=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Perlindungan Muka/Las</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($e11=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Tali Keselamatan</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row38">
            <td class="column0 style36 s style38" colspan="4">
              @if ($e5=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Kacamata Debu</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($e12=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Masker</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row39">
            <td class="column0 style36 s style38" colspan="4">
              @if ($e6=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Sarung Tangan Katun</td>
            <td class="column4 style36 s style38" colspan="4">
              @if ($e13=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Pelindung Pendengaran</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row40">
            <td class="column0 style36 s style38" colspan="4">
              @if ($e7=='on')
                <img src="{{ asset('img/box cek.jpg') }}" alt="" width="30px">
                @else
                <img src="{{ asset('img/box.jpg') }}" alt="" width="30px">
              @endif
              &nbsp;&nbsp;&nbsp;Sarung Tangan Karet</td>
            <td class="column4 style36 s style38" colspan="4">&nbsp;&nbsp;&nbsp;……………………………………</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row41">
            <td class="column0 style21 s style23" colspan="8">F. PENGELUARAN SURAT IZIN</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row42">
            <td class="column0 style36 s style38" colspan="8">Izin diberikan untuk kerja dijalankan yang tertera diatas selama</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row43">
            <td class="column0 style39 s style44" colspan="4" rowspan="2">Dari &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
              Tgl&nbsp;&nbsp;{{ $ftanggal }}&nbsp;&nbsp;Jam&nbsp;&nbsp;{{ $fjam }}<br />
Sampai Dengan    : Tgl&nbsp;&nbsp;{{ $ftanggal2 }}&nbsp;&nbsp;Jam&nbsp;&nbsp;{{ $fjam2 }}</td>
            <td class="column4 style36 s style38" colspan="2">Asisten Manajer</td>
            <td class="column6 style45 null style46" colspan="2">{{ $fasisten }}</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row44">
            <td class="column4 style36 s style38" colspan="2">Pengawas</td>
            <td class="column6 style45 null style46" colspan="2">{{ $fpengawas }}</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row45">
            <td class="column0 style16 null"></td>
            <td class="column1 style16 null"></td>
            <td class="column2 style17 null"></td>
            <td class="column3 style17 null"></td>
            <td class="column4 style16 null"></td>
            <td class="column5 style16 null"></td>
            <td class="column6 style16 null"></td>
            <td class="column7 style16 null"></td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row46">
            <td class="column0 style21 s style23" colspan="8">G. PERSETUJUAN PENANGGUNG JAWAB (Diisi Oleh Kontraktor/Pelaksana Pekerjaan)</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row47">
            <td class="column0 style24 s style26" colspan="8">Saya menyatakan bahwa Saya telah membaca &amp; memahami K3 &amp; pekerjaan ini akan dilaksanakan sesuai dengan segala persyaratan yang ada</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row48">
            <td class="column0 style27 s style30" colspan="2" rowspan="2">Tandatangan (Orang yang Berkompeten) Pelaksana</td>
            <td class="column2 style31 s style32" colspan="2">Nama</td>
            <td class="column4 style3 s">Tandatangan</td>
            <td class="column5 style3 s">Tanggal</td>
            <td class="column6 style3 s">Jam</td>
            <td class="column7 style3 s">Kontraktor/<br />
Pelaksana</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row49">
            <td class="column2 style31 null style32" colspan="2">{{ $gnama }}</td>
            <td class="column4 style5 null"></td>
            <td class="column5 style5 null">{{ $gtanggal }}</td>
            <td class="column6 style5 null">{{ $gjam }}</td>
            <td class="column7 style5 null">{{ $gkontraktor }}</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row50">
            <td class="column0 style20 s style20" colspan="2">Ganti Orang yang Berkompeten/Pelaksana</td>
            <td class="column2 style20 null style20" colspan="2">{{ $gnama2 }}</td>
            <td class="column4 style5 null"></td>
            <td class="column5 style5 null">{{ $gtanggal2 }}</td>
            <td class="column6 style5 null">{{ $gjam2 }}</td>
            <td class="column7 style5 null">{{ $gkontraktor2 }}</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row51">
            <td class="column0 style33 s style35" colspan="8">H. PEMBATALAN</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row52">
            <td class="column0 style19 s style19" colspan="8">Surat Izin Dibatalkan</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row53">
            <td class="column0 style19 s style19" colspan="2" rowspan="2">Tandatangan</td>
            <td class="column2 style20 s style20" colspan="2">Nama</td>
            <td class="column4 style20 s style20" colspan="2">Tandatangan</td>
            <td class="column6 style5 s">Tanggal</td>
            <td class="column7 style5 s">Jam</td>
            <td class="column8">&nbsp;</td>
          </tr>
          <tr class="row54">
            <td class="column2 style20 null style20" colspan="2">{{ $hnama }}</td>
            <td class="column4 style20 null style20" colspan="2"></td>
            <td class="column6 style5 null">{{ $htanggal }}</td>
            <td class="column7 style5 null">{{ $hjam }}</td>
            <td class="column8">&nbsp;</td>
          </tr>


        </tbody>
    </table>

  </div>

  <script>
  function myFunction() {
      window.print();
  }
  document.getElementById("print").innerHTML = myFunction();
  </script>
  </body>
</html>
