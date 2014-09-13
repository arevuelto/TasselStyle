<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:21
         compiled from "C:\xampp\htdocs\Tassel\themes\default-bootstrap\css\comparator.css" */ ?>
<?php /*%%SmartyHeaderCode:2184353e50f81917d40-57969727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccec447d9d3dba768d6b6f56ca20220f69491ead' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\themes\\default-bootstrap\\css\\comparator.css',
      1 => 1407520377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2184353e50f81917d40-57969727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f819592a5_24076960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f819592a5_24076960')) {function content_53e50f819592a5_24076960($_smarty_tpl) {?>/********************************************************************
					Compare Page Styles
********************************************************************/
table#product_comparison tbody tr td.product-block {
  vertical-align: top;
  padding: 14px 19px 19px;
  text-align: center; }
table#product_comparison tbody tr td.td_empty,
table#product_comparison tbody tr td.feature-name, table#product_comparison tbody tr.comparison_header {
  background: #fbfbfb;
  color: #333333; }
table#product_comparison tbody tr td.comparison_infos {
  text-align: center; }
  table#product_comparison tbody tr td.comparison_infos div.center {
    margin: 0 auto;
    width: 80px; }
table#product_comparison tbody tr td.td_empty {
  vertical-align: bottom; }
  table#product_comparison tbody tr td.td_empty > span {
    font: 600 18px/22px "Open Sans", sans-serif;
    text-transform: uppercase;
    color: #555454; }
table#product_comparison .remove {
  text-align: right;
  padding: 0 0 15px 0; }
  table#product_comparison .remove a {
    font-size: 23px;
    line-height: 23px;
    color: #c0c0c0; }
    table#product_comparison .remove a:hover {
      color: #515151; }
table#product_comparison .product-image-block {
  display: inline-block;
  position: relative; }
  table#product_comparison .product-image-block .product_image {
    padding: 9px;
    border: 1px solid #d6d4d4;
    display: inline-block;
    margin: 0 0 8px 0; }
    table#product_comparison .product-image-block .product_image img {
      width: 100%; }
table#product_comparison h5 {
  padding: 0 0 8px 0;
  min-height: 54px; }
table#product_comparison .prices-container {
  padding: 0 0 5px 0; }
table#product_comparison .comparison_availability_statut {
  display: none;
  font-weight: 700;
  color: #060; }
table#product_comparison .product_discount {
  padding-top: 5px; }
  table#product_comparison .product_discount .reduced-price {
    color: red;
    font-weight: 700; }
table#product_comparison .product_desc {
  padding: 0 0 12px 0; }
table#product_comparison .button-container a, table#product_comparison .button-container > span {
  margin-bottom: 10px; }
table#product_comparison .comparison_unit_price {
  font-size: 17px;
  font-family: "Open Sans", sans-serif;
  color: #333333;
  font-style: italic; }
table#product_comparison .product-rating {
  width: 80px;
  margin: 0 auto;
  overflow: hidden; }
table#product_comparison .comparison_feature .product_name {
  display: none; }

.footer_link {
  margin: 0 0 20px 0; }

#stOCClose {
  width: 29px !important;
  height: 29px !important; }

.stButton .stFb,
.stButton .stTwbutton,
.stButton .stMainServices,
.stButton .stButton_gradient {
  height: 22px !important; }

.share strong {
  display: block;
  margin-bottom: 10px; }
.share > div {
  margin-bottom: 8px; }
@media (min-width: 1200px) {
  .share {
    position: relative;
    top: -350px; } }
@media (min-width: 992px) and (max-width: 1199px) {
  .share {
    position: relative;
    top: -260px; } }
@media (min-width: 768px) and (max-width: 991px) {
  .share {
    position: relative;
    top: -245px; } }

.stArrow {
  display: none !important; }

/***** IE code ****/
.ie8 table#product_comparison .product-image-block .product_image img {
  width: auto; }

/**** responsive code ******/
@media (max-width: 992px) {
  #columns table#product_comparison tbody tr td.td_empty span {
    font-size: 14px; }
  #columns table#product_comparison tbody tr td.product-block {
    padding: 14px; }
  #columns table#product_comparison .button.ajax_add_to_cart_button,
  #columns table#product_comparison .button.lnk_view {
    font-size: 14px; } }
@media (max-width: 767px) {
  #product_comparison table,
  #product_comparison thead,
  #product_comparison tbody,
  #product_comparison th,
  #product_comparison td,
  #product_comparison tr {
    display: block; }

  #product_comparison thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px; }

  #product_comparison tr {
    overflow: hidden; }
    #product_comparison tr:last-child {
      border-bottom: none; }
      #product_comparison tr:last-child td {
        border-bottom: none; }

  #product_comparison td {
    border: none;
    position: relative;
    white-space: normal;
    float: left;
    width: 33.33%; }
    #product_comparison td.td_empty {
      width: 100% !important;
      clear: both; }
    #product_comparison td:last-child {
      border-bottom: none; }

  #product_comparison .comparison_feature .feature-name {
    width: 100%;
    float: none;
    clear: both; } }
@media (max-width: 480px) {
  #product_comparison td {
    float: none;
    width: 100%; }

  #product_comparison .comparison_feature td {
    float: left;
    width: 50%; }
  #product_comparison .comparison_feature .feature-name {
    width: 100%;
    clear: both; }
  #product_comparison .comparison_feature .product-name {
    width: 50%;
    float: left;
    display: block; } }
<?php }} ?>
