<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 19:57:22
         compiled from "C:\xampp\htdocs\Tassel\themes\default-bootstrap\css\modules\blockcurrencies\blockcurrencies.css" */ ?>
<?php /*%%SmartyHeaderCode:2005253e50f82743601-75543998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '686b4f1b0906dec31a3e21cfc58c9040866fd282' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tassel\\themes\\default-bootstrap\\css\\modules\\blockcurrencies\\blockcurrencies.css',
      1 => 1407520378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2005253e50f82743601-75543998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e50f82750c54_61599682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e50f82750c54_61599682')) {function content_53e50f82750c54_61599682($_smarty_tpl) {?>#currencies-block-top {
  float: right;
  border-left: 1px solid #515151;
  position: relative; }
  @media (max-width: 479px) {
    #currencies-block-top {
      width: 25%; } }
  #currencies-block-top span.firstWord {
    display: none; }
  #currencies-block-top div.current {
    font-weight: bold;
    padding: 8px 10px 10px 10px;
    color: white;
    text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    line-height: 18px; }
    @media (max-width: 479px) {
      #currencies-block-top div.current {
        text-align: center;
        padding: 9px 5px 10px;
        font-size: 11px; } }
    #currencies-block-top div.current strong {
      color: #777777; }
    #currencies-block-top div.current:hover, #currencies-block-top div.current.active {
      background: #2b2b2b; }
    #currencies-block-top div.current:after {
      content: "\f0d7";
      font-family: "FontAwesome";
      font-size: 18px;
      line-height: 18px;
      color: #686666;
      vertical-align: -2px;
      padding-left: 12px; }
      @media (max-width: 479px) {
        #currencies-block-top div.current:after {
          padding-left: 2px;
          font-size: 13px;
          line-height: 13px;
          vertical-align: 0; } }
    @media (max-width: 479px) {
      #currencies-block-top div.current .cur-label {
        display: none; } }
  #currencies-block-top ul {
    display: none;
    position: absolute;
    top: 37px;
    left: 0;
    width: 157px;
    background: #333333;
    z-index: 2; }
    #currencies-block-top ul li {
      color: white;
      line-height: 35px;
      font-size: 13px; }
      #currencies-block-top ul li a,
      #currencies-block-top ul li > span {
        padding: 0 10px 0 12px;
        display: block;
        color: white; }
      #currencies-block-top ul li.selected, #currencies-block-top ul li:hover a {
        background: #484848; }
<?php }} ?>