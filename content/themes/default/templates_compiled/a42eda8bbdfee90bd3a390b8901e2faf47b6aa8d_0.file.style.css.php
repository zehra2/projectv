<?php
/* Smarty version 4.3.4, created on 2024-02-05 14:57:55
  from 'D:\wamp\www\mediavbay-new\content\themes\default\css\style.css' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c0f7739373f8_43148682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a42eda8bbdfee90bd3a390b8901e2faf47b6aa8d' => 
    array (
      0 => 'D:\\wamp\\www\\mediavbay-new\\content\\themes\\default\\css\\style.css',
      1 => 1707144854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c0f7739373f8_43148682 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * Index:
 *
 * 01. BASIC
 * 02. MAIN
 * 03. HEADER
 * 04. COMMON
 * 05. PUBLISHER
 * 06. POST
 * 07. COMMENT
 * 08. BLOG
 * 09. AUTO-COMPLETE
 * 10. LIGHTBOX
 * 11. STORIES
 * 12. CHAT
 * 13. EMOJI
 * 14. REACTIONS
 * 15. RATING
 * 16. PAGE = [BASIC]
 * 17. PAGE = [404]
 * 18. PAGE = [OAUTH]
 * 19. PAGE = [INDEX]
 * 20. PAGE = [FORUMS]
 * 21. PAGE = [DIRECTORY]
 * 22. PAGE = [MESSAGES]
 * 23. PAGE = [LIVE]
 * 24. PAGE = [PROFILE]
 * 25. PAGE = [ADMIN]
 * 26. PAGE = [MARKET]
 * 27. PAGE = [MOVIES]
 * 28. NOTY NOTIFICATION
 * 29. TRANSLATOR
 * 30. BIG ICON
 * 31. LOADER
 * 32. POST LOADER
 * 33. ON/OFF TOGGLE
 * 34. CUSTOM RADIO/CHECKBOX TEMPLATES
 * 35. SOCIAL BUTTONS
 * 36. EXTRAS
 * 37. OFFCANVAS
 */

/* BASIC */
/* ------------------------------- */

:root {
  --body-font-family: Poppins, Helvetica, "sans-serif";
  --body-bg-color: #f0f2f5;
  --body-bg-color-dark: #1E252B;
  --body-color: #111;
  --body-color-dark: #c1d4e3;
  --link-color: #5e72e4;
  --header-bg-color: #fff;
  --header-bg-color-dark: #262D34;
  --card-dark-color: #262D34;
  --card-dark-divider: #2e3f4d;
  --card-dark-hover: #2b3843;
  --card-dark-input: #1e252b;
  --card-dark-input-color: #eaeaea;
}

body {
  font-family: var(--body-font-family);
  /* 70px for header */
  padding-top: 70px;
  font-size: 15px;
  color: var(--body-color);
  background-color: var(--body-bg-color);
  position: relative;
}

body.night-mode {
  color: var(--body-color-dark);
  background-color: var(--body-bg-color-dark);
}

body.n_activated,
body.n_live {
  /* 70px for header + 50px for top bar */
  padding-top: 120px;
}

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

a {
  color: var(--link-color);
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

pre {
  padding: 15px;
  font-size: 13px;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f7f7f7;
  border: 1px solid #dbdbdb;
  border-radius: 4px;
}

body.night-mode pre {
  color: var(--body-color-dark);
  background-color: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

/* -- */

/* MAIN */
/* ------------------------------- */

/* == Icons == */

/* header-icons */
.header-icon,
.header-icon * {
  color: #111 ! important;
  fill: #111 ! important;
}

body.night-mode .header-icon,
body.night-mode .header-icon * {
  color: #c1d4e3 ! important;
  fill: #c1d4e3 ! important;
}

/* == */

/* main-icons */
.main-icon,
.main-icon *,
.x-form-tools {
  color: #5e72e4 ! important;
  fill: #5e72e4 ! important;
}

body.night-mode .main-icon,
body.night-mode .main-icon *,
body.night-mode .x-form-tools {
  color: #5e72e4 ! important;
  fill: #5e72e4 ! important;
}

/* == */

/* action-icons */
.action-icon,
.action-icon * {
  color: #111 ! important;
  fill: #111 ! important;
}

body.night-mode .action-icon,
body.night-mode .action-icon * {
  color: #c1d4e3 ! important;
  fill: #c1d4e3 ! important;
}

/* == */

/* cutom-icons */
.white-icon,
.white-icon * {
  color: #fff ! important;
  fill: #fff ! important;
}

.danger-icon,
.danger-icon * {
  color: #cb2027 ! important;
  fill: #cb2027 ! important;
}

/* == */

/* == SVG == */
.svg-container {
  display: inline-block;
}

.svg-container svg {
  width: inherit !important;
  height: inherit !important;
}

/* == */

/* == Scrollbar == */
.custom-scrollbar ::-webkit-scrollbar {
  visibility: hidden;
  height: 8px;
  width: 8px;
}

.custom-scrollbar ::-webkit-scrollbar-thumb {
  visibility: hidden;
  border-radius: 4px;
  background: #808080;
}

.custom-scrollbar:hover ::-webkit-scrollbar,
.custom-scrollbar:hover ::-webkit-scrollbar-thumb {
  visibility: visible;
}

/* == */

/* == Tooltip == */
.tooltip-inner {
  font-family: var(--body-font-family);
  white-space: nowrap;
  max-width: none;
}

/* == */

/* == Text == */
body.night-mode .text-muted {
  color: #798ea4 !important;
}

/* == */

/* == Badge == */
.badge.badge-lg {
  font-size: 100%;
}

/* == */

/* == Pagination == */
body.night-mode .pagination .page-link {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
  color: var(--body-color-dark);
}

/* == */

/* == Img-thumbnail == */
body.night-mode .img-thumbnail {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

/* == */

/* == List-group == */
.packages-permissions .list-group-item {
  border-width: 0 0 1px 0;
}

body.night-mode .list-group-item {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
  color: var(--body-color-dark);
}

/* == */

/* == Nav-pills == */

.nav-link {
  color: var(--link-color);
}

/* -- Custom Nav */
.nav-pills.nav-search .nav-item,
.nav-pills.nav-started .nav-item {
  margin-right: 10px;
  margin-bottom: 10px;
}

.nav-pills.nav-search .nav-item:last-child,
.nav-pills.nav-started .nav-item:last-child {
  margin-right: 0;
}

.nav-pills.nav-search .nav-link:not(.active) {
  background: #fff;
}

.nav-pills.nav-started .nav-link {
  padding-top: 15px;
  padding-bottom: 15px;
}

.nav-pills.nav-started .nav-link:not(.active) {
  background: #f3f3f3;
}

body.night-mode .nav-pills.nav-search .nav-link:not(.active),
body.night-mode .nav-pills.nav-started .nav-link:not(.active) {
  background: var(--card-dark-color);
  color: #fff;
}

body.night-mode .nav-pills.nav-search .nav-link:not(.active):hover,
body.night-mode .nav-pills.nav-started .nav-link:not(.active):hover {
  background: var(--card-dark-hover);
}

/* == */

/* == Nav-tabs == */
body.night-mode .nav-tabs {
  border-bottom-color: var(--card-dark-divider);
}

body.night-mode .nav-tabs .nav-item.show .nav-link,
body.night-mode .nav-tabs .nav-link.active {
  color: var(--body-color-dark);
  border-color: var(--card-dark-divider);
  background-color: var(--card-dark-divider);
}

body.night-mode .nav-tabs .nav-link:not(.active):hover {
  border-color: var(--card-dark-divider);
}

/* == */

/* == Dropdown == */
.dropdown-item.active,
.dropdown-item:active {
  background-color: var(--link-color);
}

.dropdown-divider {
  border-color: #f4f4f4;
  margin-left: 20px;
  margin-right: 20px;
}

.dropdown-menu {
  min-width: 260px;
  border: 0;
  box-shadow: rgb(0 0 0 / 10%) 0px 10px 15px -3px,
    rgb(0 0 0 / 10%) 0px 4px 6px -4px;
}

body.night-mode .dropdown-menu {
  color: var(--body-color-dark);
  background: var(--header-bg-color-dark);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}

.dropdown-menu .dropdown-item {
  font-size: 15px;
  padding: 12px 26px;
}

body.night-mode .dropdown-item {
  color: var(--body-color-dark);
}

body.night-mode .dropdown-item:focus,
body.night-mode .dropdown-item:hover {
  color: var(--body-color-dark);
  background-color: var(--card-dark-hover);
}

body.night-mode .dropdown-divider {
  border-top-color: var(--card-dark-divider);
}

/* == */

/* == Modal == */
.modal {
  z-index: 999999;
}

body.night-mode .modal-content {
  background-color: var(--card-dark-color);
}

body.night-mode .modal-header,
body.night-mode .modal-footer {
  border-color: var(--card-dark-divider);
}

.modal-header.with-nav {
  padding-bottom: 0;
  border-bottom: 0;
}

/* == */

/* == Alert == */
.alert {
  padding: 16px 24px;
  border-radius: 16px;
}

.alert-link:hover {
  text-decoration: underline;
}

.alert-dismissible {
  padding-right: 72px;
}

.alert-primary {
  color: #fff;
  border-color: #7889e8;
  background-color: #7889e8;
}

.alert-primary hr {
  border-top-color: #6276e4;
}

.alert-secondary {
  color: #212529;
  border-color: #f6f7f8;
  background-color: #f6f7f8;
}

.alert-secondary hr {
  border-top-color: #e8eaed;
}

.alert-success {
  color: #fff;
  border-color: #4fd69c;
  background-color: #4fd69c;
}

.alert-success hr {
  border-top-color: #3ad190;
}

.alert-info {
  color: #fff;
  border-color: #37d5f2;
  background-color: #37d5f2;
}

.alert-info hr {
  border-top-color: #1fd0f0;
}

.alert-warning {
  color: #fff;
  border-color: #fc7c5f;
  background-color: #fc7c5f;
}

.alert-warning hr {
  border-top-color: #fc6846;
}

.alert-danger {
  color: #fff;
  border-color: #f75676;
  background-color: #f75676;
}

.alert-danger hr {
  border-top-color: #f63e62;
}

.alert-light {
  color: #fff;
  border-color: #bac1c8;
  background-color: #bac1c8;
}

.alert-light hr {
  border-top-color: #acb4bd;
}

.alert-dark {
  color: #fff;
  border-color: #45484b;
  background-color: #45484b;
}

.alert-dark hr {
  border-top-color: #393b3e;
}

/* -- Custom Alerts */
.alert-post {
  background: #f8f9fa;
  color: var(--link-color);
  font-weight: 600;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

body.night-mode .alert-post {
  background: var(--card-dark-hover);
}

.alert-chat {
  background: #f4f4f4;
  width: 75%;
  padding: 15px 25px !important;
  margin: 0 auto !important;
  color: #555;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
}

body.night-mode .alert-chat {
  background: var(--card-dark-input);
}

.alert .title {
  padding-bottom: 8px;
  margin-bottom: 10px;
  font-weight: 600;
  border-bottom: 1px solid #00000012;
}

.alert .icon {
  display: table-cell;
  vertical-align: middle;
  padding-right: 10px;
}

.alert .text {
  display: table-cell;
  vertical-align: top;
  text-align: left;
}

/* == */

/* == Buttons == */
.btn {
  font-size: 13px;
  font-weight: 600;
  padding: 1rem 2.5rem;
  white-space: nowrap;
  box-shadow: none !important;
}

.btn.focus,
.btn:focus {
  outline: 0;
  box-shadow: none;
}

.btn.disabled,
.btn:disabled {
  box-shadow: none;
}

.btn-lg,
.btn-group-lg>.btn {
  font-size: 14px;
  padding: 16px 96px;
}

.btn-md,
.btn-group-md>.btn {
  font-size: 12px;
  padding: 0.75rem 1.85rem;
}

.btn-sm,
.btn-group-sm>.btn {
  font-size: 11px;
  padding: 8px 26px;
}

.btn-icon {
  padding: 12px 14px;
}

.btn-lg.btn-icon {
  padding: 19px 22px;
}

.btn-md.btn-icon {
  padding: 17px 20px;
}

.btn-sm.btn-icon {
  padding: 5px 8px;
}

.btn-primary,
.btn-primary.disabled,
.btn-primary:disabled,
.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show>.btn-primary.dropdown-toggle {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
}

.btn-primary {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.btn-primary:hover {
  color: #fff;
  border-color: #4d61cf;
  background-color: #4d61cf;
}

.btn-primary.focus,
.btn-primary:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08),
    0 0 0 0 rgba(94, 114, 228, 0.5);
}

.btn-primary:not(:disabled):not(.disabled).active:focus,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.show>.btn-primary.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-secondary,
.btn-secondary.disabled,
.btn-secondary:disabled,
.btn-secondary:not(:disabled):not(.disabled).active,
.btn-secondary:not(:disabled):not(.disabled):active,
.show>.btn-secondary.dropdown-toggle {
  color: #212529;
  border-color: #f7fafc;
  background-color: #f7fafc;
}

.btn-secondary {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.btn-secondary:hover {
  color: #212529;
  border-color: #f1f4f6;
  background-color: #f1f4f6;
}

.btn-secondary.focus,
.btn-secondary:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08),
    0 0 0 0 rgba(247, 250, 252, 0.5);
}

.btn-secondary:not(:disabled):not(.disabled).active:focus,
.btn-secondary:not(:disabled):not(.disabled):active:focus,
.show>.btn-secondary.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-success,
.btn-success.disabled,
.btn-success:disabled,
.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show>.btn-success.dropdown-toggle {
  color: #fff;
  border-color: #2dce89;
  background-color: #2dce89;
}

.btn-success {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.btn-success:hover {
  color: #fff;
  border-color: #2bc080;
  background-color: #2bc080;
}

.btn-success.focus,
.btn-success:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08),
    0 0 0 0 rgba(45, 206, 137, 0.5);
}

.btn-success:not(:disabled):not(.disabled).active:focus,
.btn-success:not(:disabled):not(.disabled):active:focus,
.show>.btn-success.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-info,
.btn-info.disabled,
.btn-info:disabled,
.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active,
.show>.btn-info.dropdown-toggle {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
}

.btn-info {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.btn-info:hover {
  color: #fff;
  border-color: #10bede;
  background-color: #10bede;
}

.btn-info.focus,
.btn-info:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08),
    0 0 0 0 rgba(17, 205, 239, 0.5);
}

.btn-info:not(:disabled):not(.disabled).active:focus,
.btn-info:not(:disabled):not(.disabled):active:focus,
.show>.btn-info.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-warning,
.btn-warning.disabled,
.btn-warning:disabled,
.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active,
.show>.btn-warning.dropdown-toggle {
  color: #fff;
  border-color: #fb6340;
  background-color: #fb6340;
}

.btn-warning {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.btn-warning:hover {
  color: #fff;
  border-color: #f0603f;
  background-color: #f0603f;
}

.btn-warning.focus,
.btn-warning:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08),
    0 0 0 0 rgba(251, 99, 64, 0.5);
}

.btn-warning:not(:disabled):not(.disabled).active:focus,
.btn-warning:not(:disabled):not(.disabled):active:focus,
.show>.btn-warning.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-danger,
.btn-danger.disabled,
.btn-danger:disabled,
.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active,
.show>.btn-danger.dropdown-toggle {
  color: #fff;
  border-color: #f5365c;
  background-color: #f5365c;
}

.btn-danger {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.btn-danger:hover {
  color: #fff;
  border-color: #eb3357;
  background-color: #eb3357;
}

.btn-danger.focus,
.btn-danger:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08),
    0 0 0 0 rgba(245, 54, 92, 0.5);
}

.btn-danger:not(:disabled):not(.disabled).active:focus,
.btn-danger:not(:disabled):not(.disabled):active:focus,
.show>.btn-danger.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-light,
.btn-light.disabled,
.btn-light:disabled,
.btn-light:not(:disabled):not(.disabled).active,
.btn-light:not(:disabled):not(.disabled):active,
.show>.btn-light.dropdown-toggle {
  color: #363853;
  border-color: #f2f2f2;
  background-color: #f2f2f2;
}

.btn-light {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.btn-light:hover {
  color: #fff;
  border-color: #a5adb4;
  background-color: #a5adb4;
}

.btn-light.focus,
.btn-light:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08),
    0 0 0 0 rgba(173, 181, 189, 0.5);
}

.btn-light:not(:disabled):not(.disabled).active:focus,
.btn-light:not(:disabled):not(.disabled):active:focus,
.show>.btn-light.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-dark,
.btn-dark.disabled,
.btn-dark:disabled,
.btn-dark:not(:disabled):not(.disabled).active,
.btn-dark:not(:disabled):not(.disabled):active,
.show>.btn-dark.dropdown-toggle {
  color: #fff;
  border-color: #212529;
  background-color: #212529;
}

.btn-dark {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
}

.btn-dark:hover {
  color: #fff;
  border-color: #212529;
  background-color: #212529;
}

.btn-dark.focus,
.btn-dark:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08),
    0 0 0 0 rgba(33, 37, 41, 0.5);
}

.btn-dark:not(:disabled):not(.disabled).active:focus,
.btn-dark:not(:disabled):not(.disabled):active:focus,
.show>.btn-dark.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-link {
  font-weight: 400;
  color: var(--link-color);
  background-color: transparent;
}

.btn-link:hover {
  text-decoration: none;
  color: #233dd2;
  border-color: transparent;
  background-color: transparent;
}

.btn-link.focus,
.btn-link:focus {
  text-decoration: none;
  border-color: transparent;
  box-shadow: none;
}

.btn-link.disabled,
.btn-link:disabled {
  pointer-events: none;
  color: #8898aa;
}

.btn-outline-primary {
  color: #5e72e4;
  border-color: #5e72e4;
  background-color: transparent;
  background-image: none;
}

.btn-outline-primary:hover {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
}

.btn-outline-primary.focus,
.btn-outline-primary:focus {
  box-shadow: 0 0 0 0 rgba(94, 114, 228, 0.5);
}

.btn-outline-primary.disabled,
.btn-outline-primary:disabled {
  color: #5e72e4;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled).active,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.show>.btn-outline-primary.dropdown-toggle {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
}

.btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.btn-outline-primary:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0 rgba(94, 114, 228, 0.5);
}

.btn-outline-secondary {
  color: #f7fafc;
  border-color: #f7fafc;
  background-color: transparent;
  background-image: none;
}

.btn-outline-secondary:hover {
  color: #212529;
  border-color: #f7fafc;
  background-color: #f7fafc;
}

.btn-outline-secondary.focus,
.btn-outline-secondary:focus {
  box-shadow: 0 0 0 0 rgba(247, 250, 252, 0.5);
}

.btn-outline-secondary.disabled,
.btn-outline-secondary:disabled {
  color: #f7fafc;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled).active,
.btn-outline-secondary:not(:disabled):not(.disabled):active,
.show>.btn-outline-secondary.dropdown-toggle {
  color: #212529;
  border-color: #f7fafc;
  background-color: #f7fafc;
}

.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0 rgba(247, 250, 252, 0.5);
}

.btn-outline-success {
  color: #2dce89;
  border-color: #2dce89;
  background-color: transparent;
  background-image: none;
}

.btn-outline-success:hover {
  color: #fff;
  border-color: #2dce89;
  background-color: #2dce89;
}

.btn-outline-success.focus,
.btn-outline-success:focus {
  box-shadow: 0 0 0 0 rgba(45, 206, 137, 0.5);
}

.btn-outline-success.disabled,
.btn-outline-success:disabled {
  color: #2dce89;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled).active,
.btn-outline-success:not(:disabled):not(.disabled):active,
.show>.btn-outline-success.dropdown-toggle {
  color: #fff;
  border-color: #2dce89;
  background-color: #2dce89;
}

.btn-outline-success:not(:disabled):not(.disabled).active:focus,
.btn-outline-success:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0 rgba(45, 206, 137, 0.5);
}

.btn-outline-info {
  color: #11cdef;
  border-color: #11cdef;
  background-color: transparent;
  background-image: none;
}

.btn-outline-info:hover {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
}

.btn-outline-info.focus,
.btn-outline-info:focus {
  box-shadow: 0 0 0 0 rgba(17, 205, 239, 0.5);
}

.btn-outline-info.disabled,
.btn-outline-info:disabled {
  color: #11cdef;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled).active,
.btn-outline-info:not(:disabled):not(.disabled):active,
.show>.btn-outline-info.dropdown-toggle {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
}

.btn-outline-info:not(:disabled):not(.disabled).active:focus,
.btn-outline-info:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0 rgba(17, 205, 239, 0.5);
}

.btn-outline-warning {
  color: #fb6340;
  border-color: #fb6340;
  background-color: transparent;
  background-image: none;
}

.btn-outline-warning:hover {
  color: #fff;
  border-color: #fb6340;
  background-color: #fb6340;
}

.btn-outline-warning.focus,
.btn-outline-warning:focus {
  box-shadow: 0 0 0 0 rgba(251, 99, 64, 0.5);
}

.btn-outline-warning.disabled,
.btn-outline-warning:disabled {
  color: #fb6340;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled).active,
.btn-outline-warning:not(:disabled):not(.disabled):active,
.show>.btn-outline-warning.dropdown-toggle {
  color: #fff;
  border-color: #fb6340;
  background-color: #fb6340;
}

.btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.btn-outline-warning:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0 rgba(251, 99, 64, 0.5);
}

.btn-outline-danger {
  color: #f5365c;
  border-color: #f5365c;
  background-color: transparent;
  background-image: none;
}

.btn-outline-danger:hover {
  color: #fff;
  border-color: #f5365c;
  background-color: #f5365c;
}

.btn-outline-danger.focus,
.btn-outline-danger:focus {
  box-shadow: 0 0 0 0 rgba(245, 54, 92, 0.5);
}

.btn-outline-danger.disabled,
.btn-outline-danger:disabled {
  color: #f5365c;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled).active,
.btn-outline-danger:not(:disabled):not(.disabled):active,
.show>.btn-outline-danger.dropdown-toggle {
  color: #fff;
  border-color: #f5365c;
  background-color: #f5365c;
}

.btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.btn-outline-danger:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0 rgba(245, 54, 92, 0.5);
}

.btn-outline-light {
  color: #adb5bd;
  border-color: #adb5bd;
  background-color: transparent;
  background-image: none;
}

.btn-outline-light:hover {
  color: #fff;
  border-color: #adb5bd;
  background-color: #adb5bd;
}

.btn-outline-light.focus,
.btn-outline-light:focus {
  box-shadow: 0 0 0 0 rgba(173, 181, 189, 0.5);
}

.btn-outline-light.disabled,
.btn-outline-light:disabled {
  color: #adb5bd;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled).active,
.btn-outline-light:not(:disabled):not(.disabled):active,
.show>.btn-outline-light.dropdown-toggle {
  color: #fff;
  border-color: #adb5bd;
  background-color: #adb5bd;
}

.btn-outline-light:not(:disabled):not(.disabled).active:focus,
.btn-outline-light:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0 rgba(173, 181, 189, 0.5);
}

.btn-outline-dark {
  color: #212529;
  border-color: #212529;
  background-color: transparent;
  background-image: none;
}

.btn-outline-dark:hover {
  color: #fff;
  border-color: #212529;
  background-color: #212529;
}

.btn-outline-dark.focus,
.btn-outline-dark:focus {
  box-shadow: 0 0 0 0 rgba(33, 37, 41, 0.5);
}

.btn-outline-dark.disabled,
.btn-outline-dark:disabled {
  color: #212529;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled).active,
.btn-outline-dark:not(:disabled):not(.disabled):active,
.show>.btn-outline-dark.dropdown-toggle {
  color: #fff;
  border-color: #212529;
  background-color: #212529;
}

.btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.btn-outline-dark:not(:disabled):not(.disabled):active:focus,
.show>.btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0 rgba(33, 37, 41, 0.5);
}

/* -- Custom Buttons */
.btn-rounded {
  border: 0 !important;
  border-radius: 50%;
}

.btn-delete:hover {
  color: #fff;
  border-color: #eb3357;
  background-color: #eb3357;
}

.btn-delete:hover .fa:before {
  content: "\f1f8";
}

.btn-payment {
  background: #f7f7f7;
}

.btn-payment:hover {
  background: #f1f1f1;
}

.btn-voice-start,
.btn-voice-stop {
  display: inline-block;
  padding: 4px 14px;
  background: #007bff;
  color: #fff;
  cursor: pointer;
  border-radius: 18px;
}

.btn-voice-stop {
  background: red;
}

.btn-chat {
  background: #fff;
  padding: 15px;
}

body.night-mode .btn-chat {
  background: var(--card-dark-color);
}

.btn-chat:hover {
  background: #f7f7f7;
}

body.night-mode .btn-chat:hover {
  background: var(--card-dark-hover);
}

/* == */

/* == Inputs == */

body.night-mode .form-text {
  color: var(--body-color-dark);
}

.form-group {
  margin-bottom: 15px;
}

.form-control,
.form-select,
.input-group-text {
  padding: .75rem 1.5rem;
}

body.night-mode .form-control,
body.night-mode .form-select,
body.night-mode .input-group-text {
  background-color: var(--card-dark-input);
  border-color: var(--card-dark-divider);
  color: var(--card-dark-input-color);
}

body.night-mode .form-control::placeholder,
body.night-mode .form-select::placeholder {
  color: #72879a;
}

body.night-mode .form-control::-webkit-input-placeholder,
body.night-mode .form-select::-webkit-input-placeholder {
  color: #72879a;
}

body.night-mode .form-control::-moz-placeholder,
body.night-mode .form-select::-moz-placeholder {
  color: #72879a;
}

body.night-mode .input-group-text::placeholder {
  color: #72879a;
}

body.night-mode .input-group-text::-webkit-input-placeholder {
  color: #72879a;
}

body.night-mode .input-group-text::-moz-placeholder {
  color: #72879a;
}

.form-control:focus,
.form-select:focus {
  box-shadow: none;
}

.form-label {
  font-weight: 600;
  color: #525f7f;
}

body.night-mode .form-label {
  color: var(--body-color-dark);
}

body.night-mode .form-control-plaintext {
  color: var(--body-color-dark);
}

.input-group .btn {
  padding-top: 9px;
  padding-bottom: 9px;
}

.form-check-label {
  padding-top: 2px;
}

/* -- Custom Inputs */
.form-table-row {
  display: flex;
  margin-bottom: 30px;
}

.form-table-row.disabled {
  opacity: 0.5;
}

.form-table-row>div {
  flex: 1;
}

.form-table-row>div:last-child {
  flex-basis: auto;
  flex-grow: 0;
  margin-left: 10px;
}

.form-table-row>div.avatar {
  flex-basis: auto;
  flex-grow: 0;
  margin-right: 10px;
}

.input-money {
  position: relative;
}

.input-money span {
  font-size: 20px;
  position: absolute;
  top: 15px;
  left: 0;
  width: 45px;
  text-align: center;
}

.input-money.right span {
  left: auto;
  right: 0;
}

.input-money input {
  font-size: 40px;
  line-height: 40px;
  font-family: opensanslight;
  margin: 0;
  padding: 10px;
  padding-left: 45px;
  height: 60px;
  outline: 0;
}

.input-money.right input {
  padding-left: 10px;
  padding-right: 45px;
}

/* == */

/* == Card == */
.card {
  border: 0 none;
  border-radius: 16px;
  margin-bottom: 20px;
}

body.night-mode .card {
  background: var(--card-dark-color);
  color: var(--body-color-dark);
}

.card-header {
  border: 0 none;
  padding: 16px;
  border-radius: 16px 16px 0 0 !important;
}

.card-footer {
  border-radius: 0 0 16px 16px !important;
  border: 0 none;
}

/* -- Custom Cards */
.card-header.with-icon {
  padding: 30px;
}

.card-header.with-nav {
  padding-bottom: 0;
  border-bottom: 0;
}

@media (min-width: 768px) {
  .card-header.with-icon {
    font-size: 16px;
    font-weight: 600;
  }
}

.card-header.block-title {
  font-size: 9px;
  font-weight: 600;
  text-transform: uppercase;
  padding: 10px 35px;
  background: transparent;
}

.card-body.with-nav,
.card-body.with-list,
.card-body.with-form {
  padding: 10px;
}

.card-body .divider,
.modal-body .divider {
  border-top: 1px solid #e6ecf5;
  margin: 25px 0;
}

.card-body .divider.dashed,
.modal-body .divider.dashed {
  border-top-style: dashed;
}

body.night-mode .card-body .divider,
body.night-mode .modal-body .divider {
  border-color: var(--card-dark-divider);
}

@media (min-width: 768px) {
  .card-body.page-content {
    padding: 30px;
  }

  .card-body.static-page-content {
    padding: 50px;
  }
}

.card-pricing {
  border: 1px solid #f4f4f4;
}

.card-pricing .icon {
  max-width: 42px;
  border: 1px solid #f4f4f4;
  padding: 4px;
  border-radius: 16px;
}

body.night-mode .card-pricing .icon {
  border-color: var(--card-dark-divider);
}

.card-pricing .price {
  font-weight: 700;
}

body.night-mode .card-pricing,
body.night-mode .card-pricing .list-group-item {
  border-color: var(--card-dark-divider);
}

.card-footer-fake {
  text-align: right;
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
  margin: 1.25rem -1.25rem -1.25rem;
}

/* == */

/* == Bg-gradient == */
.bg-gradient-primary {
  color: #fff !important;
  background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-primary {
  color: #fff !important;
  background: #5e72e4 !important;
}

.bg-gradient-secondary {
  background: linear-gradient(87deg, #f7fafc 0, #f7f8fc 100%) !important;
}

.bg-gradient-success {
  color: #fff !important;
  background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
}

.bg-gradient-info {
  color: #fff !important;
  background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
}

.bg-info {
  color: #fff !important;
  background: #1171ef !important;
}

.bg-gradient-warning {
  color: #fff !important;
  background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
}

.bg-gradient-danger {
  color: #fff !important;
  background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
}

.bg-gradient-light {
  background: linear-gradient(87deg, #adb5bd 0, #adaebd 100%) !important;
}

.bg-gradient-dark {
  color: #eee;
  background: linear-gradient(87deg, #212529 0, #212229 100%) !important;
}

.bg-gradient-default {
  color: #eee;
  background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

.bg-gradient-white {
  background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}

.bg-gradient-neutral {
  background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}

.bg-gradient-darker {
  color: #eee;
  background: linear-gradient(87deg, #000 0, #000 100%) !important;
}

.bg-gradient-blue {
  color: #fff !important;
  background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-gradient-indigo {
  color: #fff !important;
  background: linear-gradient(87deg, #5603ad 0, #9d03ad 100%) !important;
}

.bg-indigo {
  color: #fff !important;
  background: #5603ad !important;
}

.bg-gradient-purple {
  color: #fff !important;
  background: linear-gradient(87deg, #8965e0 0, #bc65e0 100%) !important;
}

.bg-gradient-pink {
  color: #fff !important;
  background: linear-gradient(87deg, #f3a4b5 0, #f3b4a4 100%) !important;
}

.bg-gradient-red {
  color: #fff !important;
  background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important;
}

.bg-red {
  color: #fff !important;
  background: #f5365c !important;
}

.bg-gradient-orange {
  color: #fff !important;
  background: linear-gradient(87deg, #fb6340 0, #fbb140 100%) !important;
}

.bg-gradient-yellow {
  color: #666;
  background: linear-gradient(87deg, #ffd600 0, #beff00 100%) !important;
}

.bg-gradient-green {
  color: #fff !important;
  background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%) !important;
}

.bg-gradient-teal {
  color: #fff !important;
  background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
}

.bg-teal {
  color: #fff !important;
  background: #1171ef !important;
}

.bg-gradient-cyan {
  color: #fff !important;
  background: linear-gradient(87deg, #2bffc6 0, #2be0ff 100%) !important;
}

.bg-gradient-white {
  background: linear-gradient(87deg, #fff 0, #fff 100%) !important;
}

.bg-gradient-gray {
  color: #fff !important;
  background: linear-gradient(87deg, #8898aa 0, #888aaa 100%) !important;
}

.bg-gradient-gray-dark {
  color: #fff !important;
  background: linear-gradient(87deg, #32325d 0, #44325d 100%) !important;
}

.bg-gradient-light {
  background: linear-gradient(87deg, #ced4da 0, #cecfda 100%) !important;
}

.bg-gradient-lighter {
  background: linear-gradient(87deg, #e9ecef 0, #e9eaef 100%) !important;
}

/* == */

/* == Callout == */
.bs-callout {
  background: #fff;
  padding: 20px;
  margin: 20px 0;
  border-left: 5px solid #eee;
  border-radius: 3px;
}

body.night-mode .bs-callout {
  background: var(--card-dark-input);
}

.bs-callout h4 {
  margin-top: 0;
  margin-bottom: 5px;
}

.bs-callout p:last-child {
  margin-bottom: 0;
}

.bs-callout code {
  border-radius: 3px;
}

.bs-callout+.bs-callout {
  margin-top: -5px;
}

.bs-callout-default {
  border-left-color: #777;
}

.bs-callout-default h4 {
  color: #777;
}

.bs-callout-primary {
  border-left-color: #428bca;
}

.bs-callout-primary h4 {
  color: #428bca;
}

.bs-callout-success {
  border-left-color: #5cb85c;
}

.bs-callout-success h4 {
  color: #5cb85c;
}

.bs-callout-danger {
  border-left-color: #d9534f;
}

.bs-callout-danger h4 {
  color: #d9534f;
}

.bs-callout-warning {
  border-left-color: #f0ad4e;
}

.bs-callout-warning h4 {
  color: #f0ad4e;
}

.bs-callout-info {
  border-left-color: #5bc0de;
}

.bs-callout-info h4 {
  color: #5bc0de;
}

/* == */

/* == [JS Plugin] Bootstrap-Select == */
.bootstrap-select:not(.input-group-btn) {
  height: 100%;
}

.bootstrap-select .dropdown-toggle .filter-option {
  display: inline-block !important;
  position: static !important;
  padding: 0 !important;
}

.bootstrap-select .btn-outline-light {
  color: #495057;
  border-color: #ddd;
}

.bootstrap-select .option .icon {
  display: table-cell;
  vertical-align: middle;
  padding-right: 10px;
}

.bootstrap-select .option .text {
  display: table-cell;
  vertical-align: top;
  text-align: left;
}

/* == */

/* == [JS Plugin] MCE Editor == */
div.mce-fullscreen {
  z-index: 99999;
}

/* == */

/* == [JS Plugin] jQuery-UI (autocomplete) == */
.ui-autocomplete {
  position: absolute;
  top: 0;
  left: 0;
  cursor: default;
  z-index: 9999;
}

.ui-widget-content {
  background: #fff;
  color: #444;
  z-index: 99999;
  padding: 10px;
  border-radius: 0 0 3px 3px;
  box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
}

body.night-mode .ui-widget-content {
  background: var(--header-bg-color-dark);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}

.ui-menu-item {
  position: relative;
  margin: 0;
  padding: 5px 0;
  border-radius: 3px;
  cursor: pointer;
}

.ui-menu-item:hover {
  background: #efefef;
}

body.night-mode .ui-menu-item:hover {
  background: #424242;
}

.ui-menu-item a {
  color: #444;
}

body.night-mode .ui-menu-item a {
  color: #e5e5e5;
}

.ui-menu-item img {
  width: 30px;
  margin: 5px;
  border-radius: 50%;
}

.ui-menu-item span {
  font-size: 13px;
}

.ui-helper-hidden-accessible {
  display: none;
}

/* -- */

/* == [JS Plugin] Tagify == */
.tagify {
  width: 100%;
}

body.night-mode .tagify {
  border-color: var(--card-dark-divider);
  color: var(--body-color-dark);
}

body.night-mode .tagify__dropdown,
body.night-mode .tagify__dropdown__wrapper {
  background-color: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

body.night-mode .tagify__dropdown__item--active {
  background-color: var(--card-dark-input);
}

/* == */

/* == [JS Plugin] VideoJS == */
.video-js:hover {
  cursor: pointer;
}

.video-js .vjs-big-play-button {
  border-radius: 50% !important;
  width: 1.6em !important;
  height: 1.6em !important;
  background: #3367d6 !important;
  border-color: #3367d6 !important;
  top: 50% !important;
  left: 50% !important;
  transform: translate(-50%, -50%) !important;
}

.video-js:hover .vjs-big-play-button,
.video-js .vjs-big-play-button:focus {
  background: #2850a7 !important;
  border-color: #2850a7 !important;
}

/* == */

/* == [JS Plugin] CookieConsent == */
.cc-window.cc-floating {
  border-radius: 10px;
}

/* == */

/* == [JS Plugin] DataTables == */
.table>:not(caption)>*>* {
  padding: .875rem .875rem;
}

/* == */

/* == [JS Plugin] Tagify == */
.tagify {
  border-radius: var(--bs-border-radius);
}

/* == */

/* HEADER */
/* ------------------------------- */

/* main-wrapper */
.main-wrapper {
  width: 100%;
  min-width: 260px;
  /* to show scroll for small size browsers ;) */
}

/* -- */

/* top-bar */
.top-bar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 50px;
  font-size: 12px;
  line-height: 50px;
  background: #fff2cc;
  color: #333;
  z-index: 1001;
}

@media (min-width: 768px) {
  .top-bar {
    font-size: 13px;
  }

  .top-bar .col-sm-5 {
    text-align: right;
  }
}

.top-bar.danger {
  background: #ce3426;
  color: #fff;
}

.top-bar.danger a {
  color: #fff200;
}

.top-bar.danger a:hover {
  text-decoration: underline;
}

/* -- */

/* main-header */
.main-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 70px;
  background: var(--header-bg-color);
  z-index: 1001;
}

body.night-mode .main-header {
  background: var(--header-bg-color-dark);
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
}

/* ** fix bootstrap modal padding-right for hiding scroll */
body.modal-open .main-header,
body.modal-open .top-bar {
  padding-right: 17px !important;
}

@media (min-width: 768px) {

  body.modal-open:not(.n_chat) .main-header,
  body.modal-open:not(.n_chat) .top-bar {
    padding-right: 74px !important;
  }

}

/* -- */
@media (min-width: 1200px) {

  .main-wrapper,
  .top-bar,
  .main-header {
    padding-right: 75px;
  }

  body.n_chat .main-wrapper,
  body.n_chat .top-bar,
  body.n_chat .main-header {
    padding-right: 0;
  }
}

body.n_activated .main-header,
body.n_live .main-header {
  top: 50px;
  /* for top bar */
}

/* -- */

/* logo-wrapper */
.main-header .logo-wrapper {
  position: relative;
  padding-left: 15px;
  padding-right: 52px;
  height: 70px;
  overflow: hidden;
  word-break: break-all;
}

.main-header .logo {
  display: block;
  font-size: 32px;
  font-weight: 600;
  line-height: 70px;
  opacity: 1;
}

.main-header img.logo-light {
  display: inline-block;
}

body.night-mode .main-header img.logo-light {
  display: none;
}

.main-header img.logo-dark {
  display: none;
}

body.night-mode .main-header img.logo-dark {
  display: inline-block;
}

@media (max-width: 768px) {
  .main-header .logo.with-menu-icon {
    margin-left: 40px;
  }
}

.main-header .logo:hover {
  opacity: 0.8;
  text-decoration: none;
}

.main-header .logo img {
  max-height: 50px;
}

.main-header .menu-icon,
.main-header .home-icon {
  position: absolute;
  top: 10px;
  right: 0;
  display: block;
  text-align: center;
  color: #fff;
  height: 50px;
  padding: 15px 14px;
  line-height: 100%;
  border-radius: 4px;
}

.main-header .menu-icon:hover,
.main-header .home-icon:hover {
  background-color: rgba(255, 255, 255, 0.1);
}

.main-header .menu-icon {
  right: auto;
  left: 5px;
}

/* -- */

/* search-wrapper */
.main-header .search-wrapper {
  position: relative;
}

.main-header .search-input-icon {
  position: absolute;
  top: 10px;
  right: 12px;
}

.main-header .search-wrapper .form-control {
  height: 44px;
  margin-top: 13px;
  margin-bottom: 8px;
  padding-right: 34px;
  box-shadow: none;
  background: #f2f2f2;
  border: 0 none;
  border-radius: 8px;
  color: #222;
  font-size: 16px;
}

body.night-mode .main-header .search-wrapper .form-control {
  background: var(--body-bg-color-dark);
  color: var(--body-color-dark);
}

.main-header .search-wrapper .form-control::placeholder {
  color: #999999;
}

.main-header .search-wrapper .form-control::-webkit-input-placeholder {
  color: #999999;
}

.main-header .search-wrapper .form-control:-moz-placeholder {
  color: #999999;
  opacity: 1;
}

body.night-mode .main-header .search-wrapper .form-control::placeholder {
  color: #72879a;
}

body.night-mode .main-header .search-wrapper .form-control::-webkit-input-placeholder {
  color: #72879a;
}

body.night-mode .main-header .search-wrapper .form-control:-moz-placeholder {
  color: #72879a;
  opacity: 1;
}

/* -- */

/* navbar-wrapper */
.navbar-wrapper>ul {
  display: flex;
}

.navbar-wrapper>ul>li {
  flex: 1;
  text-align: center;
  margin: 0 2px;
}

.navbar-wrapper>ul>li.mini-search {
  flex: 4;
}

.navbar-wrapper>ul>li>a {
  position: relative;
  display: block;
  text-align: center;
  height: 50px;
  margin-top: 10px;
  padding: 0 10px;
  line-height: 50px;
  border-radius: 4px;
}

.navbar-wrapper>ul>li>a:hover {
  background-color: rgb(160 160 160 / 10%);
}

body.night-mode .navbar-wrapper>ul>li>a:hover {
  background-color: rgb(234 234 234 / 10%);
}

.navbar-wrapper>ul>li.dropdown.show>a {
  background-color: rgba(255, 255, 255, 0.1);
}

body.night-mode .navbar-wrapper>ul>li.dropdown.show>a {
  background-color: #494c62;
}

.navbar-wrapper .counter {
  position: absolute;
  top: 5px;
  right: 0;
  padding: 2px 4px;
  color: #fff;
  font-size: 10px;
  line-height: 14px;
  font-weight: 600;
  border-radius: 3px;
}

.navbar-wrapper .counter.red {
  background: #ff5e3a;
}

.navbar-wrapper .counter.blue {
  background: #38a9ff;
}

.navbar-wrapper .counter.purple {
  background: #7c5ac2;
}

/* -- user-menu */
.navbar-wrapper .user-menu>img {
  display: inline-block;
  margin-top: -5px;
  height: 20px;
  width: 20px;
  border-radius: 50%;
}

@media (min-width: 768px) {
  .navbar-wrapper .user-menu>img {
    height: 25px;
    width: 25px;
  }
}

/* -- dropdown-menu */
.navbar-wrapper>ul>li.dropdown {
  position: static;
}

@media (min-width: 768px) {
  .navbar-wrapper>ul>li.dropdown {
    position: relative;
  }
}

/* -- dropdown-widget */
.dropdown-widget {
  width: 100%;
  padding-bottom: 0;
  padding-top: 0;
}

.dropdown-widget-header {
  padding: 12px;
  font-size: 11px;
  border-bottom: 1px solid #f4f4f4;
}

body.night-mode .dropdown-widget-header {
  border-color: var(--card-dark-divider);
}

.dropdown-widget-header .title {
  font-size: 16px;
  line-height: 22px;
  font-weight: 500;
}

.dropdown-widget-header a:hover {
  text-decoration: underline;
}

.dropdown-widget-body {
  padding: 0;
  font-size: 12px;
}

.dropdown-widget-body .title {
  border-top: 1px solid #e4e4e4;
  border-bottom: 1px solid #e4e4e4;
  color: #9a9fbf;
  padding: 8px;
  display: block;
  font-size: 11px;
  font-weight: 600;
  line-height: 16px;
}

body.night-mode .dropdown-widget-body .title {
  border-color: var(--card-dark-divider);
}

.dropdown-widget-footer {
  display: block;
  padding: 10px 0;
  border-top: 1px solid #f4f4f4;
  border-bottom: 0 none;
  text-align: center;
  font-size: 13px;
}

body.night-mode .dropdown-widget-footer {
  border-color: var(--card-dark-divider);
}

.dropdown-widget-footer:hover {
  text-decoration: underline;
}

@media (min-width: 768px) {
  .dropdown-widget {
    min-width: 380px !important;
  }

  .dropdown-widget.dropdown-search {
    border-radius: 0.375rem;
  }
}

/* -- */

/* COMMON */
/* ------------------------------- */

/* no-data */
.no-data {
  padding: 8px 20px;
  background: #f7f7f7;
  border-radius: 10px;
  font-weight: 500;
}

body.night-mode .no-data {
  background: var(--card-dark-input);
}

/* payments plans */
.payment-plans {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.payment-plan {
  flex-basis: 100%;
  background: #f9f9f9;
  padding: 15px 30px;
  border-radius: 16px;
}

@media (min-width: 1400px) {
  .payment-plan {
    flex-basis: 49%;
  }

  .payment-plan.full {
    flex-basis: 100%;
  }

}

body.night-mode .payment-plan {
  background: var(--card-dark-input);
}

.payment-plan.new {
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--link-color);
  cursor: pointer;
  min-height: 150px;
}

.payment-plan.new.address {
  min-height: 220px;
}

/* -- */

/* shipping-address */
.shipping-address {
  padding: 20px;
  margin-bottom: 10px;
  border: 1px solid #f4f4f4;
  border-radius: 16px;
}

body.night-mode .shipping-address {
  border-color: var(--card-dark-divider);
}

/* -- */

/* section-title */
.section-title {
  background: #f5f5f5;
  padding: 14px;
  font-weight: 600;
  text-align: center;
  border-radius: 8px;
}

body.night-mode .section-title {
  background-color: var(--card-dark-hover);
}

/* -- */

/* heading */
.heading-small {
  font-size: 12px;
  padding: 4px 0;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}

/* -- */

/* hr-heading */
.hr-heading {
  display: block;
  overflow: hidden;
  text-align: center;
  white-space: nowrap;
}

.hr-heading-text {
  position: relative;
  display: inline-block;
}

.hr-heading-text:before,
.hr-heading-text:after {
  position: absolute;
  top: 50%;
  width: 9999px;
  height: 1px;
  background: #f4f4f4;
  content: "";
}

body.night-mode .hr-heading-text:before,
body.night-mode .hr-heading-text:after {
  background: var(--card-dark-divider);
}

.hr-heading-text:before {
  right: 100%;
  margin-right: 15px;
}

.hr-heading-text:after {
  left: 100%;
  margin-left: 15px;
}

/* -- */

/* user-box */
.user-box {
  display: block;
  margin: 5px;
  text-align: center;
  text-decoration: none;
}

.circled-user-box {
  margin: 5px;
}

.circled-user-box .user-box {
  position: relative;
  padding-top: 100%;
  margin: 0;
  margin-bottom: 20px;
}

.pro-box-wrapper .user-box {
  width: 71px;
  float: left;
  opacity: 0.55;
}

.pro-box-wrapper.full-opacity .user-box {
  opacity: 1;
}

.pro-box-wrapper .user-box.slick-center {
  opacity: 1;
  transform: scale(1.1);
  font-weight: 600;
}

.user-box img {
  width: 100%;
  height: 100%;
  margin: 0 auto;
  border-radius: 50%;
}

.circled-user-box .user-box img {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  object-fit: cover;
}

.pro-box-wrapper .user-box img {
  width: 60px;
  height: 60px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.user-box .name {
  margin-top: 5px;
  font-size: 11px;
  word-break: break-word;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.circled-user-box .user-box .name {
  position: absolute;
  left: 0;
  right: 0;
}

/* -- */

/* ui-box */
.ui-box {
  position: relative;
  background: #fff;
  padding: 50px 15px 15px;
  margin-top: 50px;
  margin-bottom: 20px;
  text-align: center;
  border-radius: 16px;
}

.ui-box.darker {
  background: #f4f4f4;
}

body.night-mode .ui-box {
  background: var(--card-dark-input);
}

.ui-box .img {
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translate(-50%);
  background: #fff;
  padding: 4px;
  margin: 0 auto;
  border-radius: 50%;
}

body.night-mode .ui-box .img {
  background: var(--card-dark-color);
}

.ui-box img {
  height: 92px;
  width: 92px;
  border-radius: 50%;
}

.ui-box .btn {
  box-shadow: none;
}

/* -- */

/* stat-panel */
.stat-panel {
  border-radius: 16px;
  margin-bottom: 20px;
  overflow: hidden;
}

.stat-panel.border {
  border: 1px solid #e6ecf5;
}

body.night-mode .stat-panel.border {
  border-color: var(--card-dark-divider) !important;
}

.stat-cell {
  position: relative;
  padding: 40px;
}

.stat-cell.narrow {
  padding: 25px;
}

.stat-cell .icon {
  position: absolute;
  top: 20px;
  right: 20px;
  background: #fff;
  font-size: 20px;
  width: 48px;
  height: 48px;
  padding: 14px;
  border-radius: 50%;
}

.stat-cell .bg-icon {
  position: absolute;
  bottom: -5px;
  right: -5px;
  font-size: 100px;
  opacity: 0.25;
}

.stat-cell a {
  font-size: 12px;
  color: #fff;
}

.stat-cell a:hover {
  text-decoration: underline;
}

/* -- */

/* main-side-nav */
.main-side-nav {
  z-index: 2;
}

.main-side-nav img {
  width: 24px;
  height: 24px;
  margin-right: 10px;
}

.main-side-nav a,
.main-side-nav .static {
  display: block;
  font-weight: 500;
  padding: 10px 16px;
  color: #5a5a5a;
}

body.night-mode .main-side-nav a,
body.night-mode .main-side-nav .static {
  color: var(--body-color-dark);
}

.main-side-nav a[data-bs-toggle="collapse"]:after {
  font-family: "Font Awesome 5 Free";
  font-weight: 700;
  font-style: normal;
  font-variant: normal;
  float: right;
  content: "\f107";
  transition: all 0.15s ease;
  color: var(--link-color);
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
}

.main-side-nav a[data-bs-toggle="collapse"][aria-expanded="true"]:after {
  content: "\f106";
}

.main-side-nav a:hover {
  color: var(--link-color);
}

.main-side-nav a.no-border {
  border-bottom: 0;
}

.main-side-nav>li.active>a {
  background-color: #e5eaef;
  color: var(--link-color);
  border-radius: 5px;
}

body.night-mode .main-side-nav a:hover,
body.night-mode .main-side-nav>li.active>a {
  background-color: var(--card-dark-hover);
  color: #fff;
  border-radius: 16px;
}

.main-side-nav ul>li.active>a {
  color: var(--link-color);
}

.main-side-nav ul a {
  margin-left: 32px;
  padding: 10px 20px;
  font-size: 13px;
  border-left: 1px solid #e4e4e4;
}

body.night-mode .main-side-nav ul a {
  color: var(--body-color-dark);
  border-left-color: var(--card-dark-divider);
}

/* side-nav */
.side-nav a,
.side-nav .static {
  display: block;
  font-weight: 500;
  padding: 15px 25px;
  color: #333;
}

body.night-mode .side-nav a,
body.night-mode .side-nav .static {
  color: var(--body-color-dark);
}

.side-nav a:hover {
  color: var(--link-color);
}

.side-nav a[data-bs-toggle="collapse"]:after {
  font-family: "Font Awesome 5 Free";
  font-weight: 700;
  font-style: normal;
  font-variant: normal;
  display: inline-block;
  float: right;
  content: "\f105";
  transition: all 0.15s ease;
  color: #ced4da;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
}

.side-nav a[data-bs-toggle="collapse"][aria-expanded="true"]:after {
  transform: rotate(90deg);
  color: var(--link-color);
}

.side-nav>li.active>a {
  background-color: #f6f9fc;
  color: var(--link-color);
  border-radius: 16px;
}

body.night-mode .side-nav>li.active>a {
  background-color: var(--card-dark-hover);
  color: #fff;
}

.side-nav ul>li.active>a {
  color: var(--link-color);
}

.side-nav ul a {
  margin-left: 32px;
  padding: 10px 20px;
  font-size: 11px;
  color: #888da8;
  border-left: 1px solid #eee;
}

body.night-mode .side-nav ul a {
  border-left-color: var(--card-dark-divider);
}

/* -- */

/* content-tabs */
.content-tabs {
  background: #fff;
  margin-bottom: 20px;
  padding: 0 5px;
  border-radius: 8px;
}

body.night-mode .content-tabs {
  background: var(--card-dark-color);
}

@media (min-width: 768px) {
  .content-tabs {
    padding: 0 10px;
  }
}

.content-tabs>ul>li {
  float: left;
}

.content-tabs>ul>li>a {
  display: block;
  padding: 12px 14px;
  font-size: 12px;
  line-height: 24px;
  color: #666;
  transition: all 0.2s ease;
}

body.night-mode .content-tabs>ul>li>a {
  color: var(--body-color-dark);
}

@media (min-width: 768px) {
  .content-tabs>ul>li>a {
    padding: 20px 28px;
    font-size: 15px;
  }
}

.content-tabs>ul>li.active>a {
  color: var(--link-color);
  font-weight: 600;
  border-bottom: 2px solid var(--link-color);
}

/* -- */

/* see-more */
.see-more {
  text-align: center;
  margin: 10px 0 0;
  padding: 10px;
}

.see-more:hover {
  text-decoration: underline;
  cursor: pointer;
}

.see-more.loading:hover {
  text-decoration: none;
  cursor: default;
}

.see-more.done:hover {
  text-decoration: underline;
  cursor: text;
}

/* --*/

/* feeds-item */
.feeds-item {
  border-bottom: 1px solid #f4f4f4;
}

body.night-mode .feeds-item {
  border-color: var(--card-dark-divider);
}

.feeds-item.with-hover:hover {
  cursor: pointer;
}

.feeds-item:last-child {
  border-bottom: 0 none;
}

.feeds-item.unread {
  background: #e9eaed;
}

body.night-mode .feeds-item.unread {
  background: var(--card-dark-input);
}

/* -- */

/* data-container */
.data-container {
  display: block;
  width: 100%;
  padding: 8px;
  min-height: 56px;
  /* 40px avatar + 16px padding */
}

.data-container.small {
  min-height: 46px;
  /* 30px avatar + 16px padding */
}

a.data-container:hover,
.data-container.clickable:hover {
  background: #f6f7f8;
  text-decoration: none;
  cursor: pointer;
}

body.night-mode a.data-container:hover,
body.night-mode .data-container.clickable:hover {
  background: var(--card-dark-divider);
}

.data-avatar {
  display: block;
  position: relative;
  /* relative for .data-reaction to be absolute */
  float: left;
}

.data-avatar img {
  width: 30px;
  height: 30px;
  text-align: center;
  border-radius: 50%;
}

@media (min-width: 768px) {
  .data-avatar img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }

  .data-container.small .data-avatar img {
    width: 30px;
    /* override the previous */
    height: 30px;
  }
}

.data-avatar .left-avatar,
.data-avatar .right-avatar {
  background-size: cover;
  background-position: center center;
  float: left;
  overflow: hidden;
  width: 14px;
  height: 30px;
  margin-right: 1px;
  border-radius: 20px 0 0 20px;
}

.data-avatar .right-avatar {
  width: 15px;
  margin-right: 0;
  border-radius: 0 20px 20px 0;
}

@media (min-width: 768px) {

  .data-avatar .left-avatar,
  .data-avatar .right-avatar {
    width: 19px;
    height: 40px;
    border-radius: 20px 0 0 20px;
  }

  .data-avatar .right-avatar {
    width: 20px;
    border-radius: 0 20px 20px 0;
  }

  .data-container.small .data-avatar .left-avatar,
  .data-container.small .data-avatar .right-avatar {
    width: 14px;
    height: 30px;
  }

  .data-container.small .data-avatar .right-avatar {
    width: 15px;
  }
}

.data-reaction {
  position: absolute;
  bottom: -4px;
  right: -6px;
}

.data-content {
  padding-left: 38px;
  color: #555;
  font-size: 13px;
}

body.night-mode .data-content {
  color: var(--body-color-dark);
}

.toast-body .data-content {
  color: #fff;
}

@media (min-width: 768px) {
  .data-content {
    padding-left: 48px;
    word-wrap: break-word;
  }

  .data-container.small .data-content {
    padding-left: 38px;
    /* override the previous */
  }
}

.data-content .data-img {
  background-color: #fff;
  border: 1px solid #ddd;
  padding: 1px;
  width: 48px;
  height: 48px;
  object-fit: cover;
}

.data-content .btn {
  padding: 2px 6px;
  font-size: 10px;
}

@media (min-width: 576px) {
  .data-content .btn {
    padding: 4px 12px;
    font-size: 12px;
  }
}

.data-content .name {
  font-weight: bold;
}

.data-content .time {
  font-size: 10px;
  color: #888;
}

.data-content .text {
  word-break: break-all;
}

/* -- */

/* x-form */
.x-form {
  position: relative;
  /* for x-form-tools */
}

.x-form-tools {
  position: absolute;
}

.x-form-tools>li {
  float: left;
  margin-left: 4px;
  padding: 4px 2px;
  border-radius: 50%;
}

.x-form-tools>li:first-child {
  margin-left: 0;
}

.x-form-tools>li:hover {
  background: #f3f3f3;
  cursor: pointer;
}

body.night-mode .x-form-tools>li:hover {
  background: var(--card-dark-hover);
}

.x-form-tools-post,
.x-form-tools-attach,
.x-form-tools-voice,
.x-form-tools-emoji {
  position: relative;
  /* for input & menus */
  overflow: hidden;
  display: inline-block;
  cursor: pointer;
}

@media (min-width: 992px) {
  .x-form-tools-post {
    display: none;
  }
}

.x-form-tools-attach input[type="file"] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  outline: none;
  background: white;
  cursor: inherit;
  display: block;
}

/* -- */

/* attachments */
.attachments li {
  float: left;
  width: 64px;
  height: 64px;
  margin-right: 5px;
  margin-bottom: 5px;
  transition: padding 0.5s;
}

@media (min-width: 768px) {
  .attachments li {
    width: 96px;
    height: 96px;
  }
}

.attachments li.item {
  position: relative;
  cursor: pointer;
  border-radius: 10px;
}

.attachments li.item img {
  width: 64px;
  height: 64px;
  border-radius: 10px;
}

@media (min-width: 768px) {
  .attachments li.item img {
    width: 94px;
    height: 94px;
  }
}

.attachments li.item .name {
  background: #fafafa;
  height: 100%;
  width: 100%;
  padding: 10px;
  color: #999;
  font-size: 10px;
  word-break: break-all;
}

.attachments li.item button {
  position: absolute;
  top: 2px;
  right: 5px;
  color: #fff;
  text-shadow: 0 1px 0 #000;
}

.attachments li.loading {
  padding-top: 22px;
  /* 64px-20px(loader) / 2 */
  background: #f3f3f3;
  border: 1px solid #f4f4f4;
  display: none;
  border-radius: 10px;
}

@media (min-width: 768px) {
  .attachments li.loading {
    padding-top: 45px;
    /* 96px-5px(loader) / 2 */
  }
}

body.night-mode .attachments li.loading {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.attachments li.add {
  position: relative;
  overflow: hidden;
  padding: 20px 0 0 25px;
  color: #ddd;
  font-size: 16px;
  cursor: pointer;
  border-radius: 16px;
  border: 2px dashed #cecece;
}

body.night-mode .attachments li.add {
  color: var(--body-color-dark);
  border-color: var(--card-dark-divider);
}

@media (min-width: 768px) {
  .attachments li.add {
    padding: 30px 0 0 35px;
    font-size: 24px;
  }
}

/* -- */

/* x-uploader */
.x-uploader {
  overflow: hidden;
}

.x-uploader input[type="file"] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  font-size: 100px;
  text-align: right;
  opacity: 0;
  outline: none;
  background: white;
  cursor: pointer;
  display: block;
}

.x-uploader .fa {
  cursor: pointer;
}

/* -- */

/* x-image */
.x-image {
  position: relative;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #eee;
  border: 1px dashed #ccc;
  width: 96px;
  height: 96px;
  overflow: hidden;
  display: block;
  border-radius: 10px;
}

body.night-mode .x-image {
  background-color: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

.x-image.full {
  width: 100%;
}

.x-image.sm {
  width: 48px;
  height: 48px;
}

.x-image:before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: #000;
  content: "";
  opacity: 0;
}

.x-image:hover.x-image:before {
  opacity: 0.2;
}

.x-image-success {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.5;
  background: #000;
  width: 100%;
  height: 100%;
  padding-top: 30%;
  text-align: center;
  color: #fff;
  font-size: 12px;
  transition: all 0.5s;
}

.x-image-loader {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.5;
  background: #000;
  width: 100%;
  height: 100%;
  padding-top: 50%;
  transition: all 0.5s;
}

.x-image.full .x-image-loader {
  padding-top: 20%;
}

.x-image .x-uploader {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 37px;
}

.x-image.full .x-uploader {
  padding-top: 35px;
}

.x-image button {
  position: absolute;
  top: 0;
  right: 5px;
  z-index: 2;
}

/* -- */

/* x-progress (uploading progress) */
.x-progress {
  height: 5px;
  margin: 0 1.5rem;
  border-radius: 25px;
}

/* -- */

/* tbl-image */
.tbl-image {
  width: 24px;
  height: 24px;
  float: left;
  margin-right: 5px;
  border-radius: 50%;
}

.tbl-image.app-icon {
  width: 34px;
  height: 34px;
  border-radius: 4px;
}

/* -- */

/* badges */
.verified-badge {
  color: #55acee;
}

.pro-badge {
  color: #e13c4c;
}

.privacy-badge {
  color: #fff;
  font-size: 16px;
}

.verified-badge:hover,
.pro-badge:hover,
.privacy-badge:hover {
  cursor: pointer;
}

/* -- */

/* ads */
.ads-title {
  font-size: 14px;
  padding: 5px 0;
  margin: 0;
  word-break: break-all;
}

.ads-descrition {
  font-size: 12px;
  word-break: break-word;
}

.adblock-warning-message {
  display: none;
  padding: 20px;
  background: #d30000;
  text-align: center;
  color: #fff;
  border-radius: 2px;
}

.adblock-detector {
  position: fixed;
  top: 70px;
  left: 0;
  right: 0;
  display: none;
  margin-bottom: 30px;
  padding: 40px 10px;
  background: #d30000;
  text-align: center;
  font-weight: bold;
  color: #fff;
}

/* -- */

/* user-popover */
@media (min-width: 768px) {
  .user-popover {
    position: relative;
  }

  .user-popover-wrapper {
    width: 400px;
    min-height: 180px;
    z-index: 99999;
  }

  .user-popover-content {
    width: 400px;
    position: absolute;
    top: 5px;
    left: 0;
    border-radius: 16px;
    background-color: #fff;
    box-shadow: 0 1px 12px rgba(0, 0, 0, 0.2);
    z-index: 999999;
  }

  body.night-mode .user-popover-content {
    background: var(--card-dark-color);
  }

  .user-card {
    position: relative;
  }

  .user-card-cover {
    width: 100%;
    height: 120px;
    background-color: #424242;
    background-size: cover;
    background-position: center center;
    border-radius: 16px 16px 0 0;
  }

  body.night-mode .user-card-cover {
    background-color: #151a1f;
  }

  .user-card-avatar {
    position: absolute;
    left: 15px;
    bottom: -15px;
    padding: 2px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3);
  }

  body.night-mode .user-card-avatar {
    background: var(--card-dark-color);
  }

  .user-card-avatar img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
  }

  .user-card-info {
    position: absolute;
    left: 96px;
    bottom: 10px;
    color: #fff;
  }

  .user-card-info a {
    color: #fff;
    text-shadow: 0 0 3px rgba(0, 0, 0, 0.9);
  }

  .user-card-info a:hover {
    text-decoration: underline;
  }

  .user-card-info a.name {
    font-size: 20px;
    font-weight: 600;
  }

  .user-card-info .info {
    font-size: 12px;
    line-height: 15px;
    text-shadow: 0 0 3px rgba(0, 0, 0, 0.9);
  }

  .user-card-meta {
    padding-left: 96px;
    padding-top: 10px;
    font-size: 14px;
    color: #000;
  }

  body.night-mode .user-card-meta {
    color: var(--body-color-dark);
  }

  .user-popover-content .popover-footer {
    padding: 8px;
    text-align: center;
    border-radius: 0 0 6px 6px;
  }

  .user-popover-content .popover-footer .btn {
    padding: 6px 12px;
    margin-right: 5px;
    margin-bottom: 5px;
  }

  /* -- */
}

/* -- */

/* trending */
.trending-item {
  word-break: break-word;
  display: block;
  padding: 5px 0;
  font-size: 13px;
}

.trending-item .hash {
  display: block;
  color: #ffffff;
  font-weight: bold;
  font-size: 14px;
}

.trending-item .frequency {
  font-size: 12px;
  color: #ffeb00;
}

.trending-item:hover .hash {
  text-decoration: underline;
}

/* -- */

/* sticker */
.sticker {
  max-height: 100px;
  display: block;
  margin: 0 auto;
}

/* -- */

/* PUBLISHER */
/* ------------------------------- */

.publisher-overlay {
  background: #000;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  opacity: 0;
  z-index: 1002;
}

body.publisher-focus .publisher-overlay {
  bottom: 0;
  opacity: 0.6;
}

.publisher {
  margin-bottom: 20px;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

body.night-mode .publisher {
  background: var(--card-dark-color);
}

body.publisher-focus .publisher {
  z-index: 1003;
}

.publisher.mini {
  margin-bottom: 0;
  border-radius: 0;
}

.publisher-loader {
  display: none;
  position: absolute;
  top: 5px;
  right: 10px;
  z-index: 1;
}

.publisher-close {
  position: absolute;
  top: 5px;
  right: 10px;
  z-index: 1;
}

.publisher-message {
  position: relative;
  padding: 15px 15px 20px 65px;
}

.publisher-message.colored,
.post-colored,
.post-colored-preview {
  height: 300px;
  padding: 30px;
  background-repeat: no-repeat !important;
  background-size: cover !important;
}

.publisher-message.colored {
  border-radius: 2px 2px 0 0;
}

.post-colored-preview {
  border-radius: 2px;
}

.post-colored-preview.small {
  height: 180px;
}

.post-colored-preview h2 {
  text-align: center;
  padding-top: 100px;
}

.post-colored-preview h4 {
  text-align: center;
  padding-top: 50px;
}

.publisher-message.colored .colored-text-wrapper,
.post-colored-text-wrapper {
  height: 240px;
  display: flex;
  text-align: center;
}

.publisher-message.colored .colored-text-wrapper {
  overflow-x: auto;
}

/* publisher-avatar */
.publisher-avatar {
  position: absolute;
  left: 15px;
  top: 15px;
  width: 40px;
  height: 40px;
  padding: 2px;
  border: 1px solid #efefef;
  border-radius: 50%;
}

body.night-mode .publisher-avatar {
  border-color: var(--card-dark-divider);
}

.publisher-message.colored .publisher-avatar {
  display: none;
}

/* -- */

/* publisher textarea */
.publisher textarea:not(.form-control) {
  background: transparent;
  direction: ltr;
  resize: none;
  outline: none;
  width: 100%;
  margin-top: 5px;
  padding: 0;
  font-size: 16px;
  line-height: 24px;
  height: 24px;
  border: 0 none;
}

body.night-mode .publisher textarea:not(.form-control) {
  color: #fff;
}

.publisher textarea:not(.form-control)::placeholder {
  color: inherit;
  opacity: 0.65;
}

.publisher textarea:not(.form-control):-ms-input-placeholder {
  color: inherit;
  opacity: 0.65;
}

.publisher textarea:not(.form-control)::-ms-input-placeholder {
  color: inherit;
  opacity: 0.65;
}

.publisher-message.colored textarea,
.post-colored .post-text {
  text-align: center;
  font-size: 25px;
  line-height: 30px;
  font-weight: 600;
  margin: auto;
}

.publisher-message.colored textarea {
  min-height: 60px;
}

.post-colored .post-text a {
  color: inherit !important;
  text-decoration: underline !important;
}

.post-colored .post-text a:hover {
  text-decoration: none !important;
}

/* -- */

/* publisher-emojis */
.publisher-emojis {
  display: none;
  position: absolute;
  bottom: 5px;
  right: 10px;
}

.publisher-emojis .far {
  cursor: pointer;
  color: #555;
}

body.night-mode .publisher-emojis .far {
  color: var(--body-color-dark);
}

/* -- */

/* publisher-slider */
.publisher-slider {
  display: none;
}

/* -- */

/* publisher-scraper */
.publisher-scraper {
  display: none;
  position: relative;
  padding: 10px;
}

.publisher-scraper video {
  width: 100%;
}

.publisher-scraper img {
  width: 100%;
  height: auto;
}

.publisher-scraper-remover {
  position: absolute;
  top: 15px;
  right: 20px;
  width: 26px;
  height: 26px;
  padding-right: 4px;
  background: #fbfbfb;
  border: 1px solid #eaeaea;
  border-radius: 50%;
  z-index: 1;
}

.publisher-scraper-remover:hover {
  background: #fff;
}

.publisher-scraper-remover button.close {
  opacity: 0.5;
}

/* -- */

/* publisher-attachments */
.publisher-attachments {
  padding: 10px 10px 5px;
}

/* -- */

/* publisher-meta */
.publisher-meta {
  position: relative;
  border-top: 1px dashed #eee;
  font-weight: 600;
  margin: 0 15px;
  padding: 8px 0;
  display: none;
}

body.night-mode .publisher-meta {
  border-color: var(--card-dark-divider);
}

.publisher-meta.top {
  border-top: 0;
  border-bottom: 1px dashed #eee;
}

.publisher-meta .svg-container {
  position: absolute;
  top: 18px;
  left: 14px;
}

.publisher-meta .svg-container.static {
  position: static;
}

.publisher-meta input {
  background: #f3f3f3;
  width: 100%;
  color: var(--link-color);
  font-weight: 600;
  font-size: 14px;
  line-height: 20px;
  padding: 12px 16px 12px 40px;
  outline: 0 none;
  border: 0 none;
  border-radius: 16px;
}

.publisher-meta input.no-icon {
  padding: 12px 16px;
}

body.night-mode .publisher-meta input {
  color: var(--body-color-dark);
  background: var(--card-dark-input);
}

.publisher-meta input::-webkit-input-placeholder {
  color: #9c9c9c;
}

.publisher-meta input:-moz-placeholder {
  color: #9c9c9c;
  opacity: 1;
}

.publisher-meta input:-ms-input-placeholder {
  color: #9c9c9c;
}

/* -- */

/* publisher-custom-thumbnail */
.publisher-custom-thumbnail {
  display: none;
  position: relative;
  margin: 10px 15px;
  padding: 8px 0;
  border-top: 1px dashed #eee;
  overflow: hidden;
}

body.night-mode .publisher-custom-thumbnail {
  border-color: var(--card-dark-divider);
}

.publisher-custom-thumbnail .x-image {
  width: 100%;
  height: 160px;
  margin-top: 5px;
}

.publisher-custom-thumbnail .x-image-loader {
  padding-top: 80px;
}

/* -- */

/* feelings */
#feelings-menu-toggle {
  white-space: nowrap;
  padding: 5px;
  cursor: pointer;
  padding: 8px 18px;
  background: #f3f3f3;
  color: #6f6f6f;
  font-weight: 600;
  border-radius: 18px;
}

body.night-mode #feelings-menu-toggle {
  background: var(--card-dark-input);
}

#feelings-menu-toggle.active {
  display: table-cell;
  background: #e2e8f6;
}

body.night-mode #feelings-menu-toggle.active {
  background: var(--card-dark-input);
  color: var(--body-color-dark);
}

#feelings-data {
  display: table-cell;
  width: 100%;
  padding-left: 5px;
}

#feelings-data span {
  white-space: nowrap;
  padding: 10px 14px;
  background: var(--link-color);
  color: #ffffff;
  font-weight: 600;
  border-radius: 18px;
  cursor: pointer;
}

#feelings-data span .twa {
  vertical-align: middle;
}

.feeling-item {
  padding: 5px;
  cursor: pointer;
  color: #666;
  margin-bottom: 5px;
}

body.night-mode .feeling-item {
  color: var(--body-color-dark);
}

.feeling-item:hover {
  background: #fff;
  color: var(--link-color) !important;
}

body.night-mode .feeling-item:hover {
  background: var(--card-dark-input);
}

.feeling-item .icon {
  display: table-cell;
  vertical-align: top;
  padding-right: 10px;
}

.feeling-item .data {
  display: table-cell;
  vertical-align: middle;
  width: 100%;
  font-size: 1.2em;
  font-weight: 600;
}

/* -- */

/* colored-pattern-item */
.colored-pattern-item {
  display: inline-block;
  height: 36px;
  width: 36px;
  padding: 0;
  border: 2px solid #fff;
  border-radius: 50%;
  background-size: cover;
  cursor: pointer;
}

body.night-mode .colored-pattern-item {
  border-color: var(--card-dark-input);
}

.colored-pattern-item.active {
  box-shadow: 0px 0px 0px 2px rgba(51, 103, 214, 0.65);
}

/* -- */

/* gif-search */
.dropdown-menu.gif-search {
  display: none;
}

.gif-search .item {
  width: 33%;
  float: left;
  margin-right: 1px;
  margin-bottom: 1px;
}

.gif-search .item>img {
  width: 100%;
  height: fit-content;
  cursor: pointer;
}

/* -- */

/* publisher-tools-tabs */
.publisher-tools-tabs {
  margin: 0 15px;
  padding-top: 15px;
  border-top: 1px solid #f4f4f4;
  border-bottom: 1px solid #f4f4f4;
}

body.night-mode .publisher-tools-tabs {
  border-color: var(--card-dark-divider);
}

.publisher-tools-tabs .divider {
  border-top: 1px solid #f4f4f4;
  margin-bottom: 15px;
}

body.night-mode .publisher-tools-tabs .divider {
  border-top-color: var(--card-dark-divider);
}

.publisher-tools-tab {
  display: block;
  background: #f7f7f7;
  padding: 10px 14px;
  color: #555;
  font-size: 13px;
  font-weight: 700;
  border-radius: 16px;
  margin-bottom: 15px;
}

body.night-mode .publisher-tools-tab {
  background: var(--card-dark-hover);
  color: var(--body-color-dark);
}

.publisher-tools-tab:hover {
  background: #f3f3f3;
  color: var(--link-color);
  cursor: pointer;
}

body.night-mode .publisher-tools-tab:hover {
  background: var(--card-dark-input);
}

.publisher-tools-tab.active,
body.night-mode .publisher-tools-tab.active {
  color: var(--link-color);
}

.publisher-tools-tab.activated {
  background: #d2e0ff;
}

body.night-mode .publisher-tools-tab.activated {
  background: var(--card-dark-input);
}

.publisher-tools-tab[data-tab="video"].activated:after,
.publisher-tools-tab[data-tab="audio"].activated:after,
.publisher-tools-tab[data-tab="file"].activated:after {
  content: "";
  background: transparent;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  cursor: initial;
}

.publisher-tools-tab.disabled {
  position: relative;
}

.publisher-tools-tab.disabled:hover {
  background: #f7f7f7;
  color: #7f838a;
  cursor: initial;
}

body.night-mode .publisher-tools-tab.disabled:hover {
  background: var(--card-dark-input);
  color: var(--body-color-dark);
}

.publisher-tools-tab.disabled:after {
  content: "";
  background: #fff;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.6;
  border-radius: 16px;
}

body.night-mode .publisher-tools-tab.disabled:after {
  background: #000;
}

.publisher-tools-tab.attach {
  position: relative;
  /* for input file */
  overflow: hidden;
}

.publisher-tools-tab.attach form {
  display: initial;
}

.publisher-tools-tab img {
  width: 24px;
  height: 24px;
  margin-right: 5px;
}

/* -- */

/* publisher-footer */
.publisher-footer {
  text-align: right;
  padding: 15px;
}

.publisher-footer-options {
  text-align: left;
  border-bottom: 1px solid #f4f4f4;
  margin-bottom: 20px;
}

body.night-mode .publisher-footer-options {
  border-color: var(--card-dark-divider);
}

.publisher-footer-buttons {
  display: flex;
  justify-content: space-between;
}

/* -- */

/* posts-filter */
.posts-filter {
  margin-bottom: 20px;
  padding-bottom: 5px;
  border-bottom: 1px solid #dfdfdf;
  line-height: 34px;
  font-weight: 600;
}

body.night-mode .posts-filter {
  border-bottom-color: var(--card-dark-divider);
}

.posts-filter .btn-group .btn,
.posts-filter .btn-group .open .btn.dropdown-toggle,
.posts-filter .btn-group .btn-default.active,
.posts-filter .btn-group .btn-default:active,
.posts-filter .btn-group .open .btn-default.dropdown-toggle {
  background: #fff;
  box-shadow: none !important;
  border: 0 none !important;
  padding: 6px 10px !important;
  border-radius: 10px;
  font-size: 13px;
}

body.night-mode .posts-filter .btn-group .btn,
body.night-mode .posts-filter .btn-group .open .btn.dropdown-toggle,
body.night-mode .posts-filter .btn-group .btn-default.active,
body.night-mode .posts-filter .btn-group .btn-default:active,
body.night-mode .posts-filter .btn-group .open .btn-default.dropdown-toggle {
  background: var(--card-dark-color);
  color: var(--body-color-dark);
}

.posts-filter .countries-filter {
  background: #ffff;
  padding: 7px 10px;
  border-radius: 10px;
  font-size: 13px;
  color: #212529;
}

body.night-mode .posts-filter .countries-filter {
  background: var(--card-dark-color);
  color: var(--body-color-dark);
}

.posts-filter .dropdown-menu:not(.countries-dropdown) {
  min-width: 160px;
}

.posts-filter .dropdown-menu .dropdown-item {
  padding: 2px 16px;
}

/* -- */

/* jobs publisher */
.add-job-question {
  background: #f7f7f7;
  margin: 10px 0;
  padding: 10px;
  font-weight: 600;
  text-align: center;
  border: 1px solid #ddd;
  border-radius: 4px;
  cursor: pointer;
}

.add-job-question:hover {
  background: #f3f3f3;
}

body.night-mode .add-job-question {
  background: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

body.night-mode .add-job-question:hover {
  background: var(--card-dark-color);
}

.job-question {
  background: #f7f7f7;
  margin: 10px 0;
  padding: 10px;
  border-radius: 4px;
}

body.night-mode .job-question {
  background: var(--card-dark-input);
}

.job-question .question {
  font-size: 16px;
  font-weight: bold;
}

.job-question .answer {
  font-size: 14px;
}

.job-candidate-wrapper {
  padding: 15px;
  border: 1px solid #f4f4f4;
  border-radius: 16px;
  margin-bottom: 20px;
}

body.night-mode .job-candidate-wrapper {
  border-color: var(--card-dark-divider);
}

.job-candidate-avatar {
  position: relative;
  display: table-cell;
  vertical-align: top;
  padding-right: 10px;
}

.job-candidate-info {
  display: table-cell;
  vertical-align: top;
  width: 100%;
  font-size: 14px;
  word-break: break-word;
}

.job-candidate-info .name {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
}

/* -- */

/* posts-staging */
.posts-staging-btn {
  display: none;
  position: fixed;
  top: 150px;
  left: 50%;
  transition: all 0.2s ease;
  transform: translate(-50%, -50%);
  z-index: 99;
}

/* -- */

/* POST */
/* ------------------------------- */

.post {
  position: relative;
  margin-bottom: 20px;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0px 0px 30px 0px rgb(82 63 105 / 5%);
}

body.night-mode .post {
  background: var(--card-dark-color);
}

.post.flagged {
  padding: 15px;
  background: #f6f7f8;
}

.post .pin-icon {
  position: absolute;
  right: 18px;
  top: -10px;
  width: auto;
  font-size: 25px;
  color: #f9b340;
}

.post.boosted,
body.night-mode .post.boosted {
  border: 2px solid #ffa412;
}

.post .boosted-icon {
  position: absolute;
  left: -5px;
  top: -15px;
  width: auto;
  padding: 3px 6px;
  font-size: 16px;
  background: #ffa412;
  color: #ffffff;
  border-radius: 50%;
  -ms-transform: rotate(-20deg);
  /* IE 9 */
  -webkit-transform: rotate(-20deg);
  /* Safari */
  transform: rotate(-20deg);
  /* Standard syntax */
}

.post.pending,
body.night-mode .post.pending {
  border: 1px dashed #9b9b9b;
}

.post .pending-icon {
  position: absolute;
  right: 18px;
  top: -18px;
  width: auto;
  font-size: 25px;
  color: #f9b340;
}

.post.highlighted {
  border: 1px solid #4083a9;
  box-shadow: inset 0 0 0 1px #4083a9;
}

.post.is_hidden {
  border: 2px dashed #aeaeae;
  border-radius: 8px;
  z-index: 1;
}

.post a:not(.dropdown-item):hover {
  text-decoration: underline;
}

.post-memory-header {
  padding: 10px 20px;
  border-bottom: 1px solid #f4f4f4;
  font-size: 14px;
  font-weight: 600;
  text-transform: capitalize;
}

body.night-mode .post-memory-header {
  border-color: var(--card-dark-divider);
}

.post-body.with-loader {
  padding: 16px;
}

.post-top-alert {
  padding: 10px 0;
  background: repeating-linear-gradient(45deg,
      #606dbc,
      #606dbc 10px,
      #465298 10px,
      #465298 20px);
  border-radius: 8px 8px 0 0;
  color: #fff;
  font-weight: 500;
  text-align: center;
  filter: grayscale(1);
}

.post-header {
  padding: 16px 16px 0;
  margin-bottom: 10px;
}

.post-avatar {
  position: relative;
  display: table-cell;
  vertical-align: top;
  padding-right: 10px;
}

.post-avatar-anonymous {
  padding: 5px;
  border-radius: 50%;
  overflow: hidden;
}

.post-avatar-picture {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #eee;
  width: 100%;
  height: 100%;
  padding-top: 100%;
  overflow: hidden;
  min-width: 60px;
  min-height: 60px;
  display: block;
  border-radius: 20px;
}

.post-avatar-picture.small {
  min-width: 25px;
  min-height: 25px;
}

.post-avatar-picture.large {
  min-width: 60px;
  min-height: 60px;
}

.post-avatar-picture.rounded {
  border-radius: 50%;
}

.post-avatar .online-dot {
  font-size: 10px;
  margin-right: 3px;
  position: absolute;
  bottom: 0;
  right: 4px;
  border: 3px solid #fff;
  border-radius: 50%;
  color: #65a830;
}

body.night-mode .post-avatar .online-dot {
  border-color: var(--card-dark-color);
}

/* -- */

.post-meta {
  display: table-cell;
  vertical-align: top;
  width: 100%;
  word-break: break-word;
  word-wrap: break-word;
}

.post-meta .dropdown .dropdown-toggle {
  color: #888;
  padding: 6px 8px;
  border-radius: 10px;
}

.post-meta .dropdown .dropdown-toggle.show,
.post-meta .dropdown .dropdown-toggle:hover {
  color: #666;
  cursor: pointer;
  background: #f4f4f4;
}

body.night-mode .post-meta .dropdown .dropdown-toggle.show,
body.night-mode .post-meta .dropdown .dropdown-toggle:hover {
  background: var(--card-dark-divider);
  color: var(--body-color-dark);
}

.post-meta .dropdown-toggle:after {
  display: none !important;
}

.post-author {
  font-size: 14px;
  line-height: 20px;
  font-weight: bold;
}

.post-time {
  color: #999;
  font-size: 11px;
  line-height: 16px;
}

.post-time a {
  color: #999;
}

.post-time .fa:hover {
  cursor: pointer;
}

.post-time .btn-group {}

.post-time .btn-group,
.post-time .btn-group .btn {
  background: transparent !important;
  box-shadow: none !important;
  border: 0 none !important;
  padding: 2px 4px !important;
  color: #999 !important;
}

.post-time .btn-group .btn:hover {
  background: #f3f3f3 !important;
}

.post-text {
  padding: 0 16px;
  text-align: initial;
  word-break: initial;
  word-wrap: break-word;
  overflow: hidden;
  margin-bottom: 10px;
  transition: height 0.2s;
}

.post-product-container .post-text,
.post-media-meta .post-text {
  padding: 0;
}

.post-replace {
  font-size: 15px;
  line-height: 22px;
}

.post-replace>a[data-readmore-toggle] {
  margin-left: 16px;
}

.post-product-container .post-replace>a[data-readmore-toggle] {
  margin-left: 0;
}

.post-text-translation {
  border-left: 2px solid #e9eaee;
  padding-left: 10px;
  margin-top: 10px;
}

.post-text .twa {
  height: 1.6em !important;
  width: 1.6em !important;
  margin: 0 0.0665em 0 0.15em !important;
  vertical-align: -0.15em !important;
  background-size: 1.6em 1.6em !important;
}

.post-paid-description {
  margin-top: 20px;
  padding: 20px;
  background: #f7f7f7;
}

body.night-mode .post-paid-description {
  background: var(--card-dark-color);
}

.post-snippet {
  margin: 16px;
  border: 1px solid #f4f4f4;
  border-radius: 16px;
}

body.night-mode .post-snippet {
  border-color: var(--card-dark-divider);
}

.post-snippet-toggle {
  padding: 6px;
  border-radius: 4px;
  text-align: center;
}

.post-edit {
  padding: 0 16px;
}

.post-stats {
  margin-top: 15px;
  margin-bottom: 10px;
  padding: 0 16px;
  font-size: 11px;
  color: #999;
}

.post-actions {
  display: flex;
  margin-top: 10px;
  padding: 6px 16px 6px 16px;
  border-top: 1px solid #f4f4f4;
}

body.night-mode .post-actions {
  border-color: var(--card-dark-divider);
}

.post-actions .action-btn {
  flex: 1;
  padding: 10px;
  color: #555;
  font-size: 13px;
  font-weight: 700;
  line-height: 14px;
  text-align: center;
  border-radius: 14px;
  transition: all 0.1s ease-in-out;
}

body.night-mode .post-actions .action-btn {
  color: var(--body-color-dark);
}

.post-actions .action-btn:hover {
  background: #f7f7f7;
  cursor: pointer;
}

body.night-mode .post-actions .action-btn:hover {
  background: var(--card-dark-hover);
}

.post-tips {
  display: flex;
  gap: 10px;
  margin-top: 10px;
  padding: 6px 16px 6px 16px;
  border-top: 1px solid #f4f4f4;
}

body.night-mode .post-tips {
  border-color: var(--card-dark-divider);
}

.post-tips .btn {
  flex: 1;
  font-weight: 700;
  text-align: center;
  border-radius: 14px;
  transition: all 0.1s ease-in-out;
}

.post-footer {
  background: #f9f9f9;
  border-top: 1px solid #eee;
  border-radius: 0 0 14px 14px;
  padding: 0 15px;
}

body.night-mode .post-footer {
  background: var(--card-dark-color);
  border-top-color: var(--card-dark-divider);
}

.post-approval {
  background: #f9f9f9;
  border-top: 1px solid #eee;
  padding: 15px;
  text-align: right;
  border-radius: 0 0 16px 16px;
}

body.night-mode .post-approval {
  background: var(--card-dark-color);
  border-top-color: var(--card-dark-divider);
}

.post-social-share {
  padding-bottom: 15px;
  margin-bottom: 20px;
  text-align: center;
  border-bottom: 1px solid #f4f4f4;
}

body.night-mode .post-social-share {
  border-color: var(--card-dark-divider);
}

.post-comments {
  padding-top: 10px;
}

/* comments-filter */
.comments-filter {
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid #e6ecf5;
}

body.night-mode .comments-filter {
  border-bottom-color: var(--card-dark-divider);
}

.comments-filter .btn-group .btn,
.comments-filter .btn-group .open .btn.dropdown-toggle,
.comments-filter .btn-group .btn-default.active,
.comments-filter .btn-group .btn-default:active,
.comments-filter .btn-group .open .btn-default.dropdown-toggle {
  background: transparent !important;
  box-shadow: none !important;
  border: 0 none !important;
  padding-left: 0 !important;
  padding-right: 0 !important;
  color: var(--link-color) !important;
}

.comments-filter .dropdown-menu {
  min-width: 100%;
}

.comments-filter .dropdown-menu .dropdown-item {
  padding: 4px 16px;
}

/* -- */

/* post images */
.pg_wrapper a {
  display: block;
  position: relative;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center center;
  background-color: #f5f5f5;
}

body.night-mode .pg_wrapper a {
  background-color: var(--card-dark-hover);
}

.pg_wrapper .more {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.3);
  color: #fff;
  font-size: 2em;
  font-weight: 600;
  line-height: 100%;
  text-align: center;
  padding-top: 40%;
}

.pg_1x {
  text-align: center;
}

.pg_1x img {
  max-width: 100%;
  max-height: 680px;
}

.pg_2x {
  width: 50%;
  float: left;
  padding-right: 1px;
}

.pg_2x>a {
  padding-bottom: 100%;
}

.pg_2o3,
.pg_1o3 {
  float: left;
  margin-right: 1px;
}

.pg_1o3 {
  margin-right: -1px;
}

.pg_2o3 .pg_2o3_in {
  margin-bottom: 1px;
}

.pg_2o3 .pg_2o3_in:last-child {
  margin-bottom: 0;
}

.pg_1o3 .pg_1o3_in {
  margin-bottom: 1px;
}

.pg_1o3 .pg_1o3_in:last-child {
  margin-bottom: 0;
}

/* -- */

/* post media */
.post-media {
  background: #f3f3f3;
  border-radius: 16px;
}

.post-snippet .post-media {
  border-radius: 4px;
}

body.night-mode .post-media {
  background: var(--card-dark-input);
}

.post-media.list {
  background: #fff;
  box-shadow: none;
  margin-bottom: 15px;
  border: 0;
}

body.night-mode .post-media.list {
  background: var(--card-dark-color);
}

.post-media img.img-fluid {
  width: 100%;
  max-height: 350px;
}

.post-media-image-wrapper {
  position: relative;
}

.post-media-image-meta {
  position: absolute;
  bottom: 15px;
  left: 15px;
}

.post-media-image {
  display: block;
  position: relative;
}

.post-media-image>div {
  border-radius: 16px 16px 0 0;
}

.post-media-image .image {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-color: #eee;
  width: 100%;
  height: 100%;
  padding-top: 50%;
  overflow: hidden;
  min-width: 100px;
  min-height: 100px;
  border-radius: 16px 16px 0 0;
}

body.night-mode .post-media-image .image {
  background-color: transparent;
}

.post-media-image .source {
  position: absolute;
  bottom: 10px;
  left: 10px;
  padding: 8px 12px;
  background: rgba(0, 0, 0, 0.65);
  color: #fff;
  font-size: 13px;
  border-radius: 10px;
  text-transform: uppercase;
}

.post-media-image .icon {
  position: absolute;
  bottom: -31px;
  left: 50%;
  margin-left: -31px;
  padding: 15px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

body.night-mode .post-media-image .icon {
  background: var(--card-dark-input);
}

.embed-facebook-wrapper iframe {
  display: none;
}

.embed-iframe-wrapper {
  padding: 0 16px;
}

.embed-iframe-wrapper * {
  width: 100% !important;
}

.embed-iframe-wrapper iframe {
  min-height: 100%;
}

.post-media-meta {
  padding: 15px;
  width: 100%;
  transition: all 0.2s;
}

.post-media-meta .title {
  display: block;
  font-size: 16px;
  font-weight: 600;
  line-height: 22px;
  word-break: break-word;
}

.post-media-meta .title:hover {
  text-decoration: none;
}

.post-media-meta .text {
  max-height: 135px;
  overflow: hidden;
}

.post-media-meta .info {
  color: #999;
  font-size: 11px;
}

.post-funding-meta,
.post-job-meta {
  padding: 15px;
  padding-bottom: 0;
  text-align: center;
}

.post-funding-meta .funding-title,
.post-job-meta .job-title {
  font-size: 18px;
  font-weight: 600;
  line-height: 26px;
  word-break: break-word;
}

.post-funding-meta .funding-completion {
  background: #f7f7f7;
  padding: 10px;
  border: 1px solid #e5e5e5;
  margin-top: 10px;
  border-radius: 6px;
  text-align: left;
}

.post-funding-meta .funding-description,
.post-job-meta .job-description {
  background: #f7f7f7;
  padding: 10px;
  border: 1px solid #e5e5e5;
  margin-top: 10px;
  border-radius: 16px;
}

body.night-mode .funding-completion,
body.night-mode .funding-description,
body.night-mode .job-description {
  border-color: var(--card-dark-divider);
  background: var(--card-dark-input);
}

/* -- */

/* post-downloader */
.post-downloader {
  border-top: 1px solid #eee;
  border-bottom: 1px solid #eee;
  padding: 10px 16px;
  margin-top: 10px;
}

body.night-mode .post-downloader {
  border-color: var(--card-dark-divider);
}

.post-downloader .icon {
  display: table-cell;
  vertical-align: middle;
  background-color: #f9f9f9;
  padding: 10px 20px;
  border-radius: 16px;
}

body.night-mode .post-downloader .icon {
  background-color: var(--card-dark-input);
}

.post-downloader .info {
  display: table-cell;
  vertical-align: top;
  padding-left: 10px;
  width: 100%;
}

/* -- */

/* post product */
.post-product-container {
  padding: 0 16px;
}

.post-product-wrapper {
  display: flex;
  background: #f7f7f7;
  padding: 10px 5px;
  border: 1px solid #e5e5e5;
  font-size: 14px;
  border-radius: 16px;
}

body.night-mode .post-product-wrapper {
  border-color: var(--card-dark-divider);
  background: var(--card-dark-input);
}

.post-product-details {
  flex: 1;
  border-right: 1px solid #e5e5e5;
  text-align: center;
  vertical-align: middle;
}

body.night-mode .post-product-details {
  border-color: var(--card-dark-divider);
}

.post-product-details:last-child {
  border-right: 0;
}

.post-product-details .title {
  font-weight: 600;
  margin-bottom: 3px;
}

.post-product-details .description {
  color: #555;
}

.post-product-details .description .badge {
  font-size: 13px;
  padding: 4px 12px;
}

body.night-mode .post-product-details .description {
  color: var(--body-color-dark);
}

/* -- */

/* action-dropdown-menu */
.action-dropdown-menu .fa {
  margin-right: 10px;
  color: #8b8b8b;
}

.action-dropdown-menu .action {
  font-size: 14px;
  line-height: 18px;
  font-weight: 600;
}

.action-dropdown-menu .action.no-icon {
  padding-left: 22px;
  font-weight: normal;
}

.action-dropdown-menu .action.no-desc {
  font-weight: normal;
}

.action-dropdown-menu .action-desc {
  padding-left: 30px;
  color: #555;
  font-size: 11px;
  line-height: 16px;
}

body.night-mode .action-dropdown-menu .action-desc {
  color: #a2acb7;
}

/* -- */

/* polls */
.poll-options {
  padding: 0 16px;
}

.poll-option {
  display: table-cell;
  vertical-align: top;
  position: relative;
  width: 100%;
  padding: 8px 12px;
  background-color: #ebebeb;
  font-weight: 600;
  border-radius: 16px;
}

body.night-mode .poll-option {
  background-color: var(--card-dark-input);
}

.poll-option:hover {
  cursor: pointer;
  background: #d4d4d4;
}

.poll-option .percentage-bg {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background-color: #89a8e8;
  border-radius: 12px;
  opacity: 0.5;
}

body.night-mode .poll-option .percentage-bg {
  background-color: var(--link-color);
}

.poll-option .form-check-input:checked+.form-check-label {
  color: #fff;
}

.poll-voters {
  display: table-cell;
  vertical-align: top;
  padding-left: 5px;
}

.poll-voters .more {
  width: 35px;
  height: 35px;
  background-color: #ebebeb;
  padding: 8px 0;
  border-radius: 50%;
  font-size: 13px;
  font-weight: 600;
  text-align: center;
  cursor: pointer;
}

body.night-mode .poll-voters .more {
  background-color: var(--card-dark-input);
}

/* -- */

/* youtube-player */
.youtube-player {
  position: relative;
  padding-top: 56%;
  height: 0;
  overflow: hidden;
  max-width: 100%;
  background: #000;
  border-radius: 16px;
}

.youtube-player iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: transparent;
}

.youtube-player img {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  display: block;
  margin: auto;
  max-width: 100%;
  width: 100%;
  height: auto;
  cursor: pointer;
  transition: 0.4s all;
}

.youtube-player img:hover {
  filter: brightness(75%);
}

.youtube-player .play {
  width: 72px;
  height: 72px;
  left: 50%;
  top: 50%;
  margin-left: -36px;
  margin-top: -36px;
  position: absolute;
  background-image: url(/content/themes/default/images/youtube.png);
  background-size: contain;
  cursor: pointer;
}

.youtube-player.with-live .play {
  width: 52px;
  height: 52px;
  left: 50%;
  top: 50%;
  margin-left: -26px;
  margin-top: -26px;
  position: absolute;
  background-image: url(/content/themes/default/images/play-button.png);
  background-size: contain;
  cursor: pointer;
}

/* -- */

/* who-shares */
.who-shares {
  background: #f3f3f3;
}

body.night-mode .who-shares {
  background: var(--body-bg-color-dark);
}

/* -- */

/* post-custom-fileds-wrapper  */
.post-custom-fileds-wrapper {
  background: #f7f7f7;
  padding: 10px 20px;
  border: 1px solid #e5e5e5;
  font-size: 14px;
  border-radius: 6px;
  text-align: left;
}

body.night-mode .post-custom-fileds-wrapper {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.post-custom-fileds-wrapper div:not(:last-child) {
  margin-bottom: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid #e7e7e7;
}

body.night-mode .post-custom-fileds-wrapper div:not(:last-child) {
  border-color: var(--card-dark-divider);
}

/* -- */

/* COMMENT */
/* ------------------------------- */

.comment {
  padding-bottom: 10px;
}

.comment-avatar {
  float: left;
}

.comment-avatar-picture {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #eee;
  width: 100%;
  height: 100%;
  padding-top: 100%;
  overflow: hidden;
  min-width: 46px;
  min-height: 46px;
  display: block;
  border-radius: 50%;
}

.comment-data,
.comment-edit {
  margin-left: 56px;
}

.comment-data .img-fluid {
  max-width: 30%;
  max-height: 100px;
  margin: 5px 0;
}

.comment-inner-wrapper {
  display: flex;
  margin-bottom: 5px;
}

.comment-inner {
  position: relative;
  /* :before */
  padding: 8px 12px;
  background-color: #fff;
  border-radius: 18px;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
}

body.night-mode .comment-inner {
  background-color: var(--card-dark-input);
}

.comment-inner:before {
  content: "";
  display: block;
  position: absolute;
  left: -6px;
  top: 9px;
  width: 0;
  height: 0;
  border: 8px solid transparent;
  border-left-width: 0;
  border-right-color: #ffffff;
  cursor: default;
  z-index: 1;
  filter: drop-shadow(-1px 1px 0px rgba(0, 0, 0, 0.02));
}

body.night-mode .comment-inner:before {
  border-right-color: var(--card-dark-input);
}

.comment-author {
  font-weight: 500;
}

.comment-text {
  text-align: initial;
  word-break: break-word;
  word-wrap: break-word;
  overflow: hidden;
  margin-bottom: 5px;
}

.comment-text .twa {
  font-size: 1.4em;
}

.comment-actions>li {
  float: left;
  margin-right: 8px;
}

.comment-replies {
  padding-top: 10px;
}

.comment-replies>ul {
  width: 100%;
}

/* comment-form */
.comment-form textarea {
  background: #fff;
  direction: ltr;
  display: block;
  border: 0;
  resize: none;
  outline: none;
  width: 100%;
  padding: 8px 16px;
  padding-right: 128px;
  margin: 0;
  font-size: 16px;
  line-height: 26px;
  height: 46px;
  border-radius: 12px;
}

.post-edit .comment-form textarea {
  background: #f7f7f7;
}

body.night-mode .comment-form textarea {
  color: var(--card-dark-input-color);
  background: var(--card-dark-input);
}

@media (min-width: 992px) {
  .comment-form textarea {
    padding-right: 100px;
  }
}

.comment-form .x-form-tools {
  bottom: 8px;
  right: 14px;
}

/* -- */

.comment-voice-notes,
.comment-attachments {
  background: #fff;
  padding: 10px 14px 4px 14px;
  margin-top: 5px;
  border: 1px solid #eee;
  border-radius: 18px;
}

.comment-voice-notes {
  display: none;
  padding: 10px;
}

body.night-mode .comment-voice-notes,
body.night-mode .comment-attachments {
  background: transparent;
  border-color: var(--card-dark-divider);
}

.comment .comment-btn {
  display: none;
  float: right;
}

.comment:hover .comment-btn {
  display: block;
}

.live-comments .comment:hover .comment-btn {
  display: none;
}

.comment-btn button.close {
  font-size: 1.4em;
}

.comment .dropdown-toggle-icon {
  color: #999;
  padding: 5px;
  border-radius: 50%;
}

.comment .dropdown-toggle-icon:hover {
  background: #e9eaee;
  cursor: pointer;
}

body.night-mode .comment .dropdown-toggle-icon:hover {
  background: var(--card-dark-divider);
}

/* BLOG */
/* ------------------------------- */

/* blog-container */
.blog-container {
  background: #ffffff;
  border-radius: 16px;
  overflow: hidden;
  margin-bottom: 20px;
  display: block;
  color: inherit;
  text-decoration: none;
  position: relative;
}

body.night-mode .blog-container {
  background: var(--card-dark-color);
}

@media (min-width: 768px) {
  .blog-container {
    height: 410px;
  }

  .blog-container.primary {
    background: var(--link-color);
  }
}

.blog-image {
  min-height: 150px;
}

@media (min-width: 576px) {
  .blog-image {
    overflow: hidden;
    height: 150px;
  }
}

.blog-image img {
  height: 100%;
  width: 100%;
  object-fit: cover;
}

@media (min-width: 768px) {
  .blog-container.primary .blog-image {
    display: inline-block;
    width: 50%;
    height: 100%;
    max-height: 100%;
  }

  .blog-container.primary .blog-image img {
    width: auto;
    max-width: inherit;
  }
}

.blog-source {
  position: absolute;
  top: 110px;
  left: 10px;
  padding: 6px;
  background: rgba(0, 0, 0, 0.65);
  color: #fff;
  font-size: 13px;
  border-radius: 3px;
  text-transform: uppercase;
}

.blog-container.primary .blog-source {
  bottom: 10px;
  top: auto;
}

.blog-content {
  padding: 10px;
}

@media (min-width: 768px) {
  .blog-container.primary .blog-content {
    color: #fff;
    display: inline-block;
    vertical-align: top;
    width: 49%;
  }
}

.blog-content h3 {
  margin: 0;
  font-weight: 900;
  font-size: 20px;
  text-transform: uppercase;
}

@media (min-width: 576px) {
  .blog-container .blog-content h3 {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    line-height: 24px;
    max-height: 72px;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
  }
}

@media (min-width: 768px) {
  .blog-container.primary .blog-content h3 {
    font-size: 26px;
    line-height: 30px;
    max-height: 180px;
    -webkit-line-clamp: 6;
  }
}

.blog-content .text {
  margin: 12px 0;
  font-size: 13px;
}

@media (min-width: 576px) {
  .blog-container .blog-content .text {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    line-height: 18px;
    max-height: 108px;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
  }
}

@media (min-width: 768px) {
  .blog-container.primary .blog-content .text {
    margin: 13px 0;
    font-size: 16px;
    font-weight: 300;
    line-height: 20px;
    max-height: 140px;
    -webkit-line-clamp: 7;
  }
}

@media (min-width: 768px) {
  .blog-container.primary .text-link {
    color: #eee;
  }
}

.blog-content .post-avatar {
  padding-right: 5px;
  padding-top: 3px;
}

.blog-more {
  width: 0%;
  height: 100%;
  color: #aaa;
  background-color: var(--link-color);
  position: absolute;
  top: 0;
  opacity: 0;
  text-align: center;
  -o-transition: all 0.4s ease-out 0s;
  transition: all 0.4s ease-out 0s;
}

.blog-more span {
  position: absolute;
  top: calc(50% - 22px);
  left: calc(50% - 45px);
  border: 1px solid #fff;
  display: inline-block;
  padding: 10px 30px;
  border-radius: 16px;
  color: #fff;
  font-size: 16px;
}

.blog-container:hover .blog-more {
  width: 100%;
  opacity: 0.95;
}

/* -- */

/* article */
.article-wrapper {
  background: #fff;
  padding: 30px;
  border-radius: 16px 16px 0 0;
}

.article-wrapper.no-footer {
  border-radius: 16px;
}

body.night-mode .article-wrapper {
  background: var(--card-dark-color);
}

.article-wrapper h3 {
  margin-top: 0;
  margin-bottom: 20px;
}

.article-meta-counter {
  display: inline-block;
  padding: 6px 14px;
  margin-bottom: 5px;
  font-size: 13px;
  line-height: 24px;
  color: #515eab;
  background: #f5f5f5;
  border-radius: 12px;
}

.article-meta-counter:hover {
  color: #999;
  background: #e1e1e1;
  cursor: pointer;
}

.article-text {
  font-size: 1.2em;
  line-height: 1.6em;
  word-break: initial;
  word-wrap: break-word;
}

.article-text img {
  max-width: 100% !important;
}

.article-text iframe {
  width: 100% !important;
}

.article-tags {
  margin-top: 20px;
}

.article-tags ul>li {
  display: inline-block;
  margin-right: 4px;
  margin-top: 4px;
}

.article-tags ul>li>a {
  border-radius: 12px;
  background: #f5f5f5;
  padding: 4px 18px;
  line-height: 24px;
  color: #555;
  font-weight: 600;
  font-size: 13px;
  text-transform: uppercase;
  text-align: center;
  word-break: break-all;
  word-wrap: break-word;
  display: inline-block;
}

.article-tags ul>li>a:hover {
  background: #b9b9b9;
  color: #fff;
}

/* -- */

/* articles-widget */
.articles-widget-header {
  margin-bottom: 20px;
  border-bottom: 1px solid #e1e1e1;
}

body.night-mode .articles-widget-header {
  border-color: var(--card-dark-divider);
}

.articles-widget-title {
  display: inline-block;
  margin: 0;
  margin-bottom: -1px;
  text-transform: uppercase;
  white-space: nowrap;
  font-weight: 500;
  font-size: 18px;
  line-height: 40px;
  color: var(--link-color);
  border-bottom: 1px solid var(--link-color);
}

.articles-widget-title.lg {
  line-height: 60px;
}

/* -- */

/* .article-categories */
.article-categories {
  margin-bottom: 15px;
}

.article-categories li {
  float: left;
  margin-right: 5px;
  margin-bottom: 5px;
}

.article-category {
  border-radius: 12px;
  background: #d8daf2;
  padding: 4px 14px;
  line-height: 24px;
  color: #515eab;
  font-weight: 600;
  font-size: 13px;
  text-transform: uppercase;
  text-align: center;
  white-space: nowrap;
  display: inline-block;
}

body.night-mode .article-category {
  background: #3f4851;
  color: var(--body-color-dark);
}

.article-category.small {
  font-size: 9px;
}

.article-category:hover,
body.night-mode .article-category:hover {
  background: var(--link-color);
  color: #fff;
}

/* -- */

/* AUTO-COMPLETE */
/* ------------------------------- */

.dropdown-menu.auto-complete {
  display: none;
}

.typeahead {
  position: relative;
  /* for dropdown-menu */
  float: left;
}

.typeahead input {
  background: transparent;
  width: 100%;
  color: #4e5665;
  font-size: 16px;
  line-height: 30px;
  outline: 0 none;
  border: 0 none;
}

body.night-mode .typeahead input {
  color: #fff;
}

.tags li {
  float: left;
  padding: 8px 12px;
  margin: 0 3px 3px 0;
  background: #f4f4f4;
  font-size: 12px;
  line-height: 16px;
  border-radius: 16px;
}

body.night-mode .tags li {
  background: var(--card-dark-color);
}

.tags button {
  font-size: 8px;
  margin-left: 4px;
}

/* Google Geo-Autocomplete */
.pac-container {
  z-index: 999999;
}

/* -- */

/* LIGHTBOX */
/* ------------------------------- */

.lightbox-open {
  overflow: hidden;
  /* hide the page scroll */
}

.lightbox {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.75);
  z-index: 99999;
  overflow-y: scroll;
}

@media (min-width: 992px) {
  .lightbox {
    overflow-y: none;
  }
}

.lightbox-container {
  display: table;
  width: 100%;
  box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.6);
  padding-right: 0;
  padding-left: 0;
}

@media (min-width: 992px) {
  .lightbox-container {
    height: 100%;
  }
}

.lightbox-preview {
  position: relative;
  display: block;
  width: 100%;
  vertical-align: middle;
  background: #000;
  text-align: center;
}

@media (min-width: 992px) {
  .lightbox-preview {
    display: table-cell;
    width: 60%;
    max-width: 800px;
  }
}

@media (min-width: 1200px) {
  .lightbox-preview {
    width: 70%;
  }
}

.lightbox-preview.nodata {
  width: 100%;
}

.lightbox-preview.with-live {
  padding: 25px;
}

.lightbox-preview.with-live video {
  top: 0 !important;
  left: 0 !important;
}

.lightbox-exit {
  position: absolute;
  top: 4%;
  right: 2%;
  opacity: 0.5;
  color: #fff;
}

.lightbox-exit:hover {
  opacity: 1;
  cursor: pointer;
}

.lightbox-next,
.lightbox-prev {
  position: absolute;
  top: 50%;
  opacity: 0.5;
}

.lightbox-next {
  right: 2%;
}

.lightbox-prev {
  left: 2%;
}

.lightbox-next:hover,
.lightbox-prev:hover {
  opacity: 1;
  cursor: pointer;
}

.lightbox-next .fa,
.lightbox-prev .fa {
  color: #fff;
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
}

.lightbox-download {
  position: absolute;
  bottom: 4%;
  left: 2%;
}

.lightbox-download a {
  color: #fff;
  opacity: 0.5;
}

.lightbox-download a:hover {
  opacity: 0.75;
}

.lightbox-preview img {
  margin: 0 auto;
  max-width: 100%;
  max-height: calc(100vh - 92px);
  /* 92px = 46*2 (header) */
}

.lightbox-data {
  display: block;
  width: 100%;
  vertical-align: top;
  background: #fff;
}

@media (min-width: 992px) {
  .lightbox-data {
    display: table-cell;
    width: 40%;
  }
}

@media (min-width: 1200px) {
  .lightbox-data {
    width: 30%;
  }
}

body.night-mode .lightbox-data {
  background: var(--card-dark-color);
}

.lightbox-post {
  padding: 0 8px;
  height: calc(100vh - 113px);
  /* 113px = 46*2 (header) + 21px (close btn) */
}

/* -- */

/* STORIES */
/* ------------------------------- */

.stories-wrapper {
  overflow: auto;
  padding-bottom: 0;
  margin-bottom: 5px;
}

.stories.carousel {
  overflow: unset !important;
}

.add-story {
  position: relative;
  display: inline-block;
  width: 110px;
  height: 160px;
  margin-bottom: 25px;
  cursor: pointer;
}

.add-story .img {
  display: block;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  border-radius: 16px;
}

.add-story .add {
  position: absolute;
  bottom: -16px;
  left: 50%;
  transform: translateX(-50%);
  padding: 6px;
  border-radius: 16px;
  background: #fff;
  font-size: 14px;
  color: var(--link-color);
  fill: var(--link-color);
}

body.night-mode .add-story .add {
  background: var(--card-dark-color);
}

.stories.sngine.carousel .story {
  width: 110px;
  max-width: 100%;
}

.stories.sngine.carousel .story>.item-link>.item-preview {
  max-height: 100%;
  height: 160px;
}

.stories.sngine .story>a>.item-preview>img {
  border-radius: 16px;
  padding: 2px;
  border: 2px solid var(--link-color);
}

.stories.sngine .story.seen {
  opacity: 0.5;
}

.stories.carousel .story>.item-link>.info {
  font-size: 13px;
}

/* -- */

/* CHAT */
/* ------------------------------- */

/* chat-sidebar */
.chat-sidebar {
  display: none;
  position: fixed;
  right: 10px;
  top: 80px;
  bottom: 10px;
  width: 65px;
}

@media (min-width: 1200px) {
  .chat-sidebar {
    display: block;
  }
}

/* chat-sidebar-content */
.chat-sidebar-content {
  position: absolute;
  top: 0;
  bottom: 120px;
  width: 100%;
}

.chat-avatar-wrapper {
  margin-bottom: 5px;
  cursor: pointer;
}

.chat-avatar-wrapper:hover .last-seen {
  opacity: 1;
}

.chat-avatar {
  position: relative;
  width: 50px;
  height: 50px;
  margin-bottom: 5px;
  margin-left: auto;
  margin-right: auto;
}

.chat-avatar img {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #eee;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.chat-avatar .online-status {
  position: absolute;
  bottom: 0;
  right: 4px;
  border: 3px solid var(--body-bg-color);
  border-radius: 50%;
  font-size: 8px;
  color: #999;
}

body.night-mode .chat-avatar .online-status {
  border-color: var(--body-bg-color-dark);
}

.chat-avatar .online-status.online {
  color: #65a830;
}

.chat-avatar-wrapper .last-seen {
  opacity: 0;
  background: #e7eaee;
  color: #666;
  font-size: 8px;
  padding: 2px;
  border-radius: 2px;
  text-align: center;
  transition: all 0.3s ease;
}

body.night-mode .chat-avatar-wrapper .last-seen {
  background: var(--card-dark-color);
  color: #999;
}

.chat-sidebar.disabled .chat-sidebar-content {
  opacity: 0.3;
}

.chat-sidebar.disabled .chat-sidebar-content .online,
.chat-sidebar.disabled .chat-sidebar-content .offline {
  display: none;
}

/* -- */

/* chat-sidebar-footer */
.chat-sidebar-footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: right;
}

/* -- */

/* chat-widget */
.chat-widget {
  display: none;
  position: fixed;
  bottom: 0;
  right: 10px;
  width: 340px;
  z-index: 1000;
  box-shadow: 0 12px 28px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 4%);
}

@media (min-width: 992px) {
  .chat-widget {
    display: block;
  }
}

/* -- */

/* chat-head-title */
.chat-widget-head {
  background: var(--header-bg-color);
  width: 100%;
  padding: 10px 16px;
  border-radius: 16px 16px 0 0;
  min-height: 60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid #f4f4f4;
  cursor: pointer;
}

body.night-mode .chat-widget-head {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.chat-head-label {
  display: none;
  position: absolute;
  top: -15px;
  right: 5px;
}

.chat-widget.chat-box.new .chat-head-label {
  display: block;
}

.chat-user-card {
  display: flex;
  align-items: center;
  min-width: 0;
}

.chat-user-card .avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
  position: relative;
}

.chat-user-card .avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
}

.chat-user-card .name {
  font-size: 14px;
  font-weight: 600;
  color: #555;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 100%;
}

body.night-mode .chat-user-card .name {
  color: var(--body-color-dark);
}

.chat-user-card .name>span {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 100%;
  line-height: normal;
}

.chat-user-card .online-status {
  position: absolute;
  bottom: 0;
  right: 0;
  border: 2px solid #fff;
  border-radius: 50%;
  font-size: 9px;
  color: #65a830;
}

.chat-user-card .online-status.offline {
  color: #999;
}

.chat-head-btns {
  flex: 0 0 auto;
}

.chat-head-btn {
  margin-right: 4px;
  background: #fff;
  padding: 4px;
  border-radius: 10px;
}

body.night-mode .chat-head-btn {
  background: var(--card-dark-color);
}

.chat-head-btn:last-child {
  margin-right: 0;
}

.chat-head-btn:hover {
  background: #f4f4f4;
  cursor: pointer;
}

body.night-mode .chat-head-btn:hover {
  background: var(--card-dark-divider);
}

/* -- */

/* chat-widget-content */
.chat-widget-content {
  position: relative;
  /* for chat-to */
  display: none;
  background: #fff;
  padding: 0;
}

body.night-mode .chat-widget-content {
  background: var(--card-dark-color);
}

/* -- */

/* chat-to */
.chat-to {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  background: #fff;
  border-bottom: 1px solid #f4f4f4;
  padding: 10px 10px 10px 40px;
}

body.night-mode .chat-to {
  background: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

.chat-to .to {
  position: absolute;
  top: 5px;
  left: 10px;
}

.panel-messages .chat-to {
  padding-top: 10px;
  padding-bottom: 10px;
}

.panel-messages .chat-to .to {
  top: 10px;
}

/* -- */

/* chat-conversations */
.chat-conversations {
  padding: 0 7px;
}

/* -- */

/* chat-typing */
.chat-typing {
  display: none;
  padding: 10px;
}

.loading-dots:after {
  content: " .";
  animation: dots 1s steps(5, end) infinite;
}

@keyframes dots {

  0%,
  20% {
    color: rgba(0, 0, 0, 0);
    text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0);
  }

  40% {
    color: var(--body-color);
    text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0);
  }

  60% {
    text-shadow: 0.25em 0 0 var(--body-color), 0.5em 0 0 rgba(0, 0, 0, 0);
  }

  80%,
  100% {
    text-shadow: 0.25em 0 0 var(--body-color), 0.5em 0 0 var(--body-color);
  }
}

/* -- */

/* chat-voice-notes & chat-attachments */
.chat-voice-notes {
  display: none;
}

.chat-voice-notes,
.chat-attachments {
  background: #fff;
  padding: 10px;
  border-top: 1px solid #f4f4f4;
}

body.night-mode .chat-voice-notes,
body.night-mode .chat-attachments {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

/* -- */

/* chat-form */
.chat-form {
  background: #fff;
  padding: 10px;
  border-top: 1px solid #f4f4f4;
  border-radius: 0 0 16px 16px;
}

body.night-mode .chat-form {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.chat-form-message {
  background: #f7f7f7;
  padding: 14px;
  overflow-y: auto;
  overflow-x: hidden;
  max-height: 69px;
  border-radius: 16px;
}

body.night-mode .chat-form-message {
  background-color: var(--card-dark-input);
}

.chat-form-message textarea,
.chat-form-message input[type="text"] {
  background: transparent;
  direction: ltr;
  display: block;
  border: 0 none;
  resize: none;
  outline: none;
  box-shadow: none;
  width: 100%;
  padding: 0;
  margin: 0;
  font-size: 16px;
  line-height: 26px;
  height: 26px;
  overflow: hidden;
}

body.night-mode .chat-form-message textarea,
body.night-mode .chat-form-message input[type="text"] {
  color: #fff;
}

.chat-form .x-form-tools {
  position: static;
  padding-top: 5px;
}

.chat-form ul.x-form-tools>li.x-form-tools-colors {
  color: var(--link-color);
}

.chat-form .emoji-menu {
  bottom: 40px;
  right: 100%;
  left: 2px;
}

.chat-form .emoji-menu:before {
  right: auto;
  left: 38px;
}

.chat-form .emoji-menu:after {
  right: auto;
  left: 39px;
}

/* -- */

/* chat-colors-menu */
.chat-colors-menu {
  display: none;
  position: absolute;
  bottom: 40px;
  left: 28px;
  width: 189px;
  margin: 0;
  padding: 6px;
  font-size: 13px;
  line-height: 100%;
  background-color: #fff;
  border: 1px solid #f4f4f4;
  border-radius: 16px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  z-index: 99999;
}

body.night-mode .chat-colors-menu {
  background-color: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.chat-colors-menu .item {
  float: left;
  padding: 4px;
  margin-right: 1px;
  margin-bottom: 1px;
}

.chat-colors-menu .item:hover {
  cursor: pointer;
  background: #f3f3f3;
  border-radius: 4px;
}

body.night-mode .chat-colors-menu .item:hover {
  background: var(--card-dark-hover);
}

/* -- */

/* conversation */
.conversation {
  padding-top: 10px;
  margin-bottom: 20px;
}

.conversation-user {
  width: 30px;
  height: 30px;
  float: left;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}

.conversation-user img {
  width: 30px;
  height: 30px;
}

.conversation-body {
  position: relative;
  /* for arrow */
  float: left;
  max-width: -moz-calc(100% - 40px);
  /* 40px = (30px+10px) (avatar + margin) */
  max-width: -webkit-calc(100% - 40px);
  max-width: -o-calc(100% - 40px);
  max-width: calc(100% - 40px);
}

.conversation.right .conversation-user,
.conversation.right .conversation-body {
  float: right;
}

.conversation-body .text {
  background: #f0f2f5;
  padding: 6px 8px;
  border-radius: 12px;
  border-bottom-left-radius: 0;
  word-break: initial;
  word-wrap: break-word;
}

body.night-mode .conversation-body .text {
  background: var(--card-dark-input);
}

.conversation.right .conversation-body .text {
  background: var(--link-color);
  color: #fff;
  border-radius: 12px;
  border-bottom-right-radius: 0;
}

.conversation.right .conversation-body .text a {
  color: #fff;
}

.conversation-body .text a {
  text-decoration: underline;
}

.conversation-body .text a:hover {
  text-decoration: none;
}

.conversation-body .text .twa {
  font-size: 2em;
}

/* -- */

/* attachments */
.conversation-body .attachments li {
  float: left;
  width: 64px;
  height: 64px;
  margin-right: 5px;
  margin-bottom: 5px;
}

.conversation-body .attachments li.item {
  border: 1px solid #eee;
  cursor: pointer;
}

.conversation-body .attachments li.item img {
  width: 64px;
  height: 64px;
}

.conversation-body .attachments li.loading {
  padding-top: 22px;
  /* 64px-20px(loader) / 2 */
  background: #f3f3f3;
  border: 1px solid #eee;
}

/* -- */

/* time */
.conversation-body .time {
  position: absolute;
  top: 100%;
  left: 0px;
  width: 204px;
  margin-top: 2px;
  color: #605f5f;
  font-size: 10px;
}

body.night-mode .conversation-body .time {
  color: #999;
}

.conversation.right .conversation-body .time {
  right: 0;
  left: auto;
  text-align: right;
}

.conversation-body .time:before {
  content: "\f017";
  font-family: "Font Awesome\ 5 Free";
  font-style: normal;
  font-weight: normal;
  text-decoration: inherit;
  margin-top: 4px;
  padding-right: 2px;
  font-size: 0.875em;
}

/* -- */

/* seen */
.conversation-body .seen {
  position: absolute;
  top: 100%;
  right: 0px;
  width: 204px;
  margin-top: 18px;
  margin-bottom: 4px;
  color: var(--header-bg-color);
  font-size: 10px;
  text-align: right;
}

.conversation-body .seen:before {
  content: "\f00c";
  font-family: "Font Awesome\ 5 Free";
  font-style: normal;
  font-weight: 900;
  text-decoration: inherit;
  margin-top: 4px;
  padding-right: 4px;
  font-size: 0.875em;
}

/* -- */

/* twilio-stream (video/audio chat) */
.twilio-stream-wrapper {
  position: relative;
  border-radius: 8px;
}

@media (min-width: 992px) {
  .twilio-stream-wrapper {
    background: #222;
  }
}

.twilio-stream video {
  width: 100%;
  border-radius: 8px;
}

.twilio-stream-local {
  display: none;
  border-radius: 8px;
}

.twilio-stream-local video {
  width: 100%;
  height: 100%;
  border-radius: 8px;
}

@media (min-width: 992px) {
  .twilio-stream-local {
    background: #000;
    position: absolute;
    width: 180px;
    height: 240px;
    top: 20px;
    right: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    border: 1px solid #fff;
  }

  .twilio-stream-local div {
    width: 180px;
    height: 240px;
  }
}

/* -- */

/* EMOJI */
/* ------------------------------- */

.emoji-menu {
  display: none;
  position: absolute;
  bottom: 30px;
  right: 0;
  min-width: 252px;
  margin: 0;
  padding: 6px 2px 0 6px;
  font-size: 13px;
  line-height: 100%;
  background-color: #fff;
  border: 1px solid #f5f5f5;
  border-radius: 16px;
  box-shadow: rgb(0 0 0 / 10%) 0px 10px 15px -3px, rgb(0 0 0 / 10%) 0px 4px 6px -4px;
  z-index: 99999;
}

body.night-mode .emoji-menu {
  background-color: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.publisher .emoji-menu {
  bottom: auto;
  top: 25px;
  right: -4px;
}

.lightbox .emoji-menu {
  bottom: auto;
  top: 27px;
  right: -7px;
}

.emoji-menu .item {
  float: left;
  padding: 3px;
  margin-right: 3px;
  margin-bottom: 3px;
}

.emoji-menu .item:hover {
  cursor: pointer;
  background: #f3f3f3;
  border-radius: 4px;
}

body.night-mode .emoji-menu .item:hover {
  background: var(--card-dark-divider);
}

.emoji-menu .item>img {
  width: 65px;
  height: 65px;
}

.emoji-menu .nav-tabs {
  border-top: 1px #f3f3f3 solid;
  border-bottom: 0;
  margin: 0px -2px 0px -6px;
  padding: 0 20px;
}

body.night-mode .emoji-menu .nav-tabs {
  border-color: var(--card-dark-divider);
}

.emoji-menu .nav-tabs>li>.nav-link {
  color: #555;
  padding: 14px 18px;
  margin: 0;
  border: 0;
  border-radius: 0;
  border-top: 2px solid transparent;
}

body.night-mode .emoji-menu .nav-tabs>li>.nav-link {
  color: var(--body-color-dark);
}

.emoji-menu .nav-tabs>li>.nav-link:hover {
  background: transparent;
  color: var(--link-color);
  border-color: transparent;
  border-bottom: 0;
}

.emoji-menu .nav-tabs>li>.nav-link.active,
.emoji-menu .nav-tabs>li>.nav-link.active:hover,
.emoji-menu .nav-tabs>li>.nav-link.active:focus {
  border: 0;
  color: var(--link-color);
  background: transparent;
  border-top: 2px solid var(--link-color);
  margin-top: -1px;
}

/* -- */

/* REACTIONS */
/* ------------------------------- */

/* reactions-stats */
.reactions-stats {
  cursor: pointer;
  line-height: 24px;
}

.reactions-stats>.reactions-stats-item {
  float: left;
  background: #fff;
  margin: 0 0 0 -6px;
  padding: 3px;
  border-radius: 50%;
}

body.night-mode .reactions-stats>.reactions-stats-item {
  background: var(--card-dark-color);
}

.reactions-stats>.reactions-stats-item:nth-child(1) {
  z-index: 3;
}

.reactions-stats>.reactions-stats-item:nth-child(2) {
  z-index: 2;
}

.reactions-stats>.reactions-stats-item:nth-child(3) {
  z-index: 1;
}

/* -- */

.reactions-wrapper {
  position: relative;
}

/* reaction-btn */
.reaction-btn {
  display: flex;
  align-items: center;
  justify-content: center;
}

.reaction-btn .reaction-btn-icon {
  display: inline-block;
}

.reaction-btn .reaction-btn-icon .far {
  font-size: 20px;
  color: #000
}

.reaction-btn .reaction-btn-name {
  text-transform: capitalize;
  margin-left: 5px;
}

/* -- */

.reactions-container {
  display: none;
  position: fixed;
  background: #fff;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  border-radius: 40px;
  z-index: 4;
}

body.night-mode .reactions-container {
  background: var(--card-dark-input);
}

@media (max-width: 480px) {
  .reactions-container {
    width: 144px;
    border-radius: 20px;
  }
}

.reactions_item {
  width: 48px;
  height: 48px;
  float: left;
  transform: scale(1);
  transition: transform 0.25s ease;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation: slideUp cubic-bezier(0.49, 0, 0.46, 1);
  animation: slideUp cubic-bezier(0.49, 0, 0.46, 1);
}

.reactions_item.duration-1 {
  -webkit-animation-duration: 0.1s;
  animation-duration: 0.1s;
}

.reactions_item.duration-2 {
  -webkit-animation-duration: 0.2s;
  animation-duration: 0.2s;
}

.reactions_item.duration-3 {
  -webkit-animation-duration: 0.3s;
  animation-duration: 0.3s;
}

.reactions_item.duration-4 {
  -webkit-animation-duration: 0.4s;
  animation-duration: 0.4s;
}

.reactions_item.duration-5 {
  -webkit-animation-duration: 0.5s;
  animation-duration: 0.5s;
}

.reactions_item.duration-6 {
  -webkit-animation-duration: 0.6s;
  animation-duration: 0.6s;
}

.reactions_item.duration-7 {
  -webkit-animation-duration: 0.7s;
  animation-duration: 0.7s;
}

.reactions_item:hover {
  transform: scale(1.25) translate(0, -3px);
}

.reactions_item:after {
  content: attr(data-title);
  position: absolute;
  background-color: rgba(0, 0, 0, 0.75);
  border-radius: 16px;
  box-sizing: border-box;
  color: #fff;
  display: inline-block;
  font-size: 10px;
  font-weight: bold;
  font-style: normal;
  line-height: 16px;
  opacity: 0;
  overflow: hidden;
  padding: 0 8px;
  text-decoration: none;
  text-overflow: ellipsis;
  transition: opacity 50ms ease;
  -webkit-user-select: none;
  text-transform: capitalize;
  visibility: hidden;
  top: 0;
  left: 50%;
  -webkit-transform: translate(-50%, -100%);
  transform: translate(-50%, -100%);
}

.reactions_item:hover:after {
  opacity: 1;
  visibility: visible;
}

@-webkit-keyframes slideUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }

  100% {
    opacity: 1;
    transform: translateY(0px);
  }
}

@keyframes slideUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }

  100% {
    opacity: 1;
    transform: translateY(0px);
  }
}

/* -- Reaction Emoji */
.inline-emoji {
  width: 18px;
  height: 18px;
}

.inline-emoji .emoji {
  transform: scale(0.15);
  top: -285%;
  right: 285%;
}

.no_animation *,
.no_animation *:after,
.no_animation *:before {
  animation: none !important;
}

.emoji {
  width: 120px;
  height: 120px;
  display: inline-block;
  border-radius: 50%;
  position: relative;
  transform: scale(0.325);
  top: -76%;
  right: 76%;
}

.emoji img {
  width: 120px;
  height: 120px;
}

.reaction img {
  animation-fill-mode: both;
  animation-duration: 1.3s;
  animation-iteration-count: infinite;
}


.reaction.reaction-1 img {
  animation-name: bounce;
  transform-origin: center bottom;
}

.reaction.reaction-2 img {
  animation-name: heartBeat;
  animation-timing-function: ease-in-out;
}

.reaction.reaction-3 img {
  animation-name: swing;
  transform-origin: top center;
}

.reaction.reaction-4 img {
  animation-name: pulse;
  animation-timing-function: ease-in-out;
}

.reaction.reaction-5 img {
  animation-name: fadeInDown;
}

.reaction.reaction-6 img {
  animation-name: swing;
  animation-timing-function: ease-in-out;
}

.reaction.reaction-7 img {
  animation-name: headShake;
  animation-timing-function: ease-in-out;
}


@keyframes bounce {

  from,
  20%,
  53%,
  to {
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transform: translate3d(0, 0, 0);
  }

  40%,
  43% {
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transform: translate3d(0, -2px, 0) scaleY(1.1);
  }

  70% {
    animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transform: translate3d(0, -1px, 0) scaleY(1.05);
  }

  80% {
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transform: translate3d(0, 0, 0) scaleY(0.95);
  }

  90% {
    transform: translate3d(0, -1px, 0) scaleY(1.02);
  }
}

@keyframes heartBeat {
  0% {
    transform: scale(1);
  }

  14% {
    transform: scale(1.05);
  }

  28% {
    transform: scale(1);
  }

  42% {
    transform: scale(1.05);
  }

  70% {
    transform: scale(1);
  }
}

@keyframes swing {
  20% {
    transform: rotate3d(0, 0, 1, 2deg);
  }

  40% {
    transform: rotate3d(0, 0, 1, -2deg);
  }

  60% {
    transform: rotate3d(0, 0, 1, 0deg);
  }

  80% {
    transform: rotate3d(0, 0, 1, -2deg);
  }

  to {
    transform: rotate3d(0, 0, 1, 0deg);
  }
}

@keyframes pulse {
  from {
    transform: scale3d(1, 1, 1);
  }

  50% {
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    transform: scale3d(1, 1, 1);
  }
}

@keyframes fadeInDown {
  from {
    opacity: 1;
    transform: translate3d(0, -5%, 0);
  }

  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

@keyframes headShake {
  0% {
    transform: translateX(0);
  }

  6.5% {
    transform: translateX(-2px) rotateY(-9deg);
  }

  18.5% {
    transform: translateX(1px) rotateY(7deg);
  }

  31.5% {
    transform: translateX(-1px) rotateY(-5deg);
  }

  43.5% {
    transform: translateX(1px) rotateY(3deg);
  }

  50% {
    transform: translateX(0);
  }
}

/* -- */

/* RATING */
/* ------------------------------- */

/* star-rating */
.star-rating {
  display: flex;
  justify-content: flex-end;
  flex-direction: row-reverse;
  font-size: 28px;
  color: #999;
}

.star-rating input {
  display: none;
}

.star-rating label {
  margin-left: 5px;
  cursor: pointer;
}

.star-rating label:last-child {
  margin-left: 0;
}

.star-rating>label:hover i {
  color: #FF9800;
}

.star-rating>label:hover~label i {
  color: #FF9800;
}

.star-rating>input:checked~label i {
  color: #FF9800;
}

/* -- */

/* review-stars */
.review-stars {
  font-size: 22px;
  color: #999;
}

.review-stars.small {
  font-size: 13px;
}

.review-stars i.checked {
  color: #FF9800;
}

.review-review {
  font-size: 14px;
}

.review-photos img {
  width: 100px;
  height: 100px;
  border-radius: 16px;
  margin-right: 5px;
  margin-bottom: 5px;
  border: 1px solid #d5d5d5;
  padding: 2px;
}

.review-reply {
  background: #ededed;
  border-radius: 16px;
  width: 80%;
  margin: 0 auto;
  padding: 10px;
}

body.night-mode .review-reply {
  background: var(--card-dark-color);
}

/* -- */


/* PAGE = [BASIC] */
/* ------------------------------- */

/* page-header */
.page-header {
  background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
  position: relative;
  text-align: center;
  padding: 70px 15px;
  overflow: hidden;
  color: #fff;
  z-index: auto;
}

.page-header.mini {
  padding: 35px 15px;
}

@media (min-width: 768px) {
  .page-header {
    padding: 90px 15px;
  }

  .page-header.mini {
    padding: 45px 15px;
  }
}

.page-header.bank-transfer {
  z-index: 1;
  padding: 20px;
  background-color: #2196f3;
  background: linear-gradient(90deg, #03a9f4 0%, #2196f3 35%, #3f51b5 100%);
}

.page-header .floating-img {
  position: absolute;
  bottom: 10px;
  left: 10%;
  width: 300px;
  opacity: 0.5;
  /*z-index: -997;*/
}

.page-header .circle-1 {
  position: absolute;
  top: 60px;
  left: -180px;
  width: 290px;
  height: 290px;
  background-image: radial-gradient(circle 800px at 75% -25%,
      #000000 0,
      rgba(255, 255, 255, 0) 100%);
  border-radius: 50%;
  opacity: 0.05;
}

.page-header .circle-2 {
  position: absolute;
  top: 17px;
  right: -242px;
  width: 500px;
  height: 500px;
  background-image: radial-gradient(circle 800px at 10% -25%,
      #000000 0,
      rgba(255, 255, 255, 0) 100%);
  border-radius: 50%;
  opacity: 0.03;
}

.page-header .circle-3 {
  position: absolute;
  top: -73px;
  right: 78px;
  width: 200px;
  height: 200px;
  background-image: radial-gradient(circle 800px at 10% -25%,
      #000000 0,
      rgba(255, 255, 255, 0) 100%);
  border-radius: 50%;
  opacity: 0.04;
}

.page-header .inner {
  z-index: 999;
}

.page-header.bank-transfer .inner {
  border: 6px solid rgba(255, 255, 255, 0.3);
  padding: 20px;
  border-radius: 5px;
}

.page-header.bank-transfer .bank-info-meta {
  font-size: 18px;
}

.page-header.bank-transfer .bank-info-help {
  font-size: 12px;
  color: #eee;
  text-transform: uppercase;
}

/* -- */

/* footer */
.footer {
  border-top: 1px solid #e6ecf5;
  padding-top: 10px;
  padding-bottom: 10px;
  margin-top: 25px;
  margin-bottom: 25px;
}

body.night-mode .footer {
  border-top: 1px solid var(--card-dark-divider);
}

@media (min-width: 768px) {
  .footer .links {
    text-align: right;
  }
}

/* -- */

/* mini-footer */
.mini-footer {
  font-size: 12px;
}

.mini-footer .copyrights {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-bottom: 5px;
  margin-bottom: 5px;
  color: #858585;
  font-weight: 500;
  border-bottom: 1px solid #e9e9e9;
}

body.night-mode .mini-footer .copyrights {
  border-bottom-color: var(--card-dark-divider);
}

.mini-footer .links {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  margin: 0 -5px 0;
}

.mini-footer .links li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}

/* -- */

/* language-dropdown */
.language-dropdown {
  padding: 8px 12px;
  border-radius: 4px;
}

.language-dropdown:hover {
  background: #f3f6f9;
}

/* -- */

/* PAGE = [404] */
/* ------------------------------- */

.notfound-wrapper {
  position: relative;
  min-height: 560px;
}

.notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  max-width: 560px;
  width: 100%;
  padding-left: 160px;
  line-height: 1.1;
}

.notfound .notfound-circle {
  position: absolute;
  left: 0;
  top: 0;
  width: 140px;
  height: 140px;
  font-size: 140px;
}

.notfound .notfound-circle:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(2.4);
  -ms-transform: scale(2.4);
  transform: scale(2.4);
  border-radius: 50%;
  background-color: #f2f5f8;
  z-index: -1;
}

body.night-mode .notfound .notfound-circle:before {
  background-color: var(--card-dark-color);
}

@media only screen and (max-width: 767px) {
  .notfound {
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 110px;
  }

  .notfound .notfound-circle {
    width: 110px;
    height: 110px;
    font-size: 110px;
  }
}

.notfound h1 {
  font-family: "Nunito", sans-serif;
  font-size: 65px;
  font-weight: 700;
  margin-top: 0px;
  margin-bottom: 10px;
  color: #151723;
  text-transform: uppercase;
}

.notfound h2 {
  font-family: "Nunito", sans-serif;
  font-size: 21px;
  font-weight: 400;
  margin: 0;
  text-transform: uppercase;
  color: #151723;
}

body.night-mode .notfound h1,
body.night-mode .notfound h2 {
  color: #fff;
}

/* -- */

/* PAGE = [OAUTH] */
/* ------------------------------- */

/* ouath-card */
.card-ouath-overlay {
  background: #000;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.6;
  transition: opacity 0.5s;
  z-index: 1002;
}

.card-ouath {
  background: #fff;
  border: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  z-index: 1003;
}

/* -- */

/* PAGE = [INDEX] */
/* ------------------------------- */

/* index-body */
body.index-body {
  padding-top: 0;
}

/* -- */

/* landing-page */
.landing-row {
  height: calc(100vh);
}

@media (max-width: 576px) {
  .landing-row {
    margin-right: -15px;
    margin-left: -15px;
  }
}

.landing-left {
  position: relative;
  background: #2b354c;
  color: #fff;
  box-shadow: 2px 0 10px rgb(0 0 0 / 30%);
}

.landing-left:before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  background-size: cover;
  background-repeat: no-repeat;
  left: 0;
  right: 0;
  background-image: url(/content/themes/default/images/landing/welcome.jpg);
  background-position: center;
  opacity: 0.1;
}

.landing-intro {
  padding: 60px 20px;
  margin: 0 auto;
  max-width: 550px;
}

@media (min-width: 992px) {
  .landing-intro {
    padding: 110px 50px;
  }
}

.landing-slider {
  margin-top: 50px;
}

.landing-slides {
  padding: 0;
  width: 100%;
  height: 420px;
  display: block;
  margin: 0 auto;
  position: relative;
}

.landing-slides * {
  user-select: none;
}

.landing-slides input {
  display: none;
}

.landing-slide-container {
  display: block;
}

.landing-slide {
  top: 0;
  left: 0;
  right: 0;
  opacity: 0;
  max-width: 420px;
  height: 420px;
  display: block;
  position: absolute;
  margin: 0 auto;
  transition: all .7s ease-in-out;
}

.landing-slide img {
  width: 100%;
  height: auto;
}

.nav label {
  width: 40px;
  height: 100%;
  display: none;
  position: absolute;
  opacity: 0.1;
  z-index: 9;
  cursor: pointer;
  transition: opacity .2s;
  color: #FFF;
  font-size: 40pt;
  text-align: center;
  line-height: 380px;
  background-color: rgba(255, 255, 255, 0);
  text-shadow: 0px 0px 15px rgb(119, 119, 119);
}

.slide:hover+.nav label {
  opacity: 0.5;
}

.nav label:hover {
  opacity: 1;
}

.nav .next {
  right: 0;
}

input:checked+.landing-slide-container .landing-slide {
  opacity: 1;
  transition: opacity 1s ease-in-out;
}

input:checked+.landing-slide-container .nav label {
  display: block;
}

.nav-dots {
  width: 100%;
  bottom: -20px;
  height: 11px;
  display: block;
  position: absolute;
  text-align: center;
}

.nav-dots .nav-dot {
  top: -5px;
  width: 7px;
  height: 7px;
  margin: 0 2px;
  position: relative;
  border-radius: 10px;
  display: inline-block;
  background-color: rgb(101 101 101);
}

.nav-dots .nav-dot:hover {
  cursor: pointer;
  background: rgb(255 255 255);
}

input#img-1:checked~.nav-dots label#img-dot-1,
input#img-2:checked~.nav-dots label#img-dot-2,
input#img-3:checked~.nav-dots label#img-dot-3 {
  background: rgb(255 255 255);
  width: 18px;
}

.landing-form {
  padding-top: 50px;
  max-width: 550px;
  margin: 0 auto;
}

@media (min-width: 992px) {
  .landing-form {
    padding-top: 120px;
  }
}

/* -- */

/* card-register */
.card-register {
  background: #fff;
  border: 0;
  font-size: 16px;
  padding: 20px;
}

@media (min-width: 992px) {
  .card-register {
    padding: 40px;
  }
}

.card-register .card-header {
  border: 0;
  background: transparent;
}

.card-register .card-header .card-title {
  font-size: 1.8em;
  font-weight: 900;
  margin-bottom: 15px;
}

.card-register .card-header .card-subtitle {
  font-size: 13px;
  color: #666;
}

body.night-mode .card-register .card-header .card-subtitle {
  font-size: 13px;
  color: #8f9ba5;
}

.card-register .form-control,
.card-register .form-select {
  border-radius: 16px;
  height: 60px;
}

.card-register .input-group>.input-group-text {
  border-radius: 16px 0 0 16px;
}

/* -- */

/* daytime_message */
.daytime_message {
  display: none;
  padding: 15px;
  margin-bottom: 20px;
  border-left: 2px solid #fba540 !important;
}

.daytime_message button {
  margin-top: 4px;
  font-size: 18px;
}

/* -- */

/* PAGE = [FORUMS] */
/* ------------------------------- */

/* forum-breadcrumb */
.forum-breadcrumb {
  padding: 16px 20px;
  margin-top: 20px;
  margin-bottom: 0;
  word-wrap: break-word;
  word-break: break-all;
}

/* -- */

/* forum-title */
.forum-title {
  margin-top: 20px;
  margin-bottom: 20px;
  word-wrap: break-word;
}

.forum-title h1 {
  font-size: 18px;
  margin-top: 0;
  margin-bottom: 5px;
}

.forum-title p {
  margin-bottom: 0;
}

/* -- */

/* forum-category */
.forum-category {
  padding: 15px 20px;
  margin-top: 20px;
  background-color: var(--link-color);
  color: #fff;
  font-weight: 600;
  font-size: 13px;
  border-radius: 16px 16px 0 0;
}

.forum-category a {
  color: #fff;
}

.forum-category a:hover {
  text-decoration: underline;
}

/* -- */

/* forum-head */
.forum-head {
  margin-right: 0;
  margin-left: 0;
}

.forum-head>.column {
  padding: 20px;
  background-color: #16232d;
  color: #fff;
  font-weight: 300;
  font-size: 12px;
  text-align: center;
  border-right: 1px solid #192534;
  border-left: 1px solid #161e27;
}

body.night-mode .forum-head>.column {
  background: var(--card-dark-input);
  border-right-color: var(--card-dark-divider);
  border-left-color: #121212;
}

.forum-head.threads>.column {
  background-color: #576c7c;
  border-right: 1px solid #374855;
  border-left: 1px solid #6d8292;
}

body.night-mode .forum-head.threads>.column {
  background: var(--card-dark-input);
}

.forum-head>.column:first-child {
  text-align: left;
  border-left: none;
}

.forum-head>.column:last-child {
  border-right: none;
}

/* -- */

/* forum-row */
.forum-row {
  display: flex;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  flex-wrap: wrap;
  margin-right: 0;
  margin-left: 0;
}

.forum-row>.column {
  display: flex;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  flex-direction: column;
  padding: 20px;
  background-color: #ffffff;
  border-bottom: 1px solid #e6e6e6;
  color: #808080;
  font-size: 12px;
  word-wrap: break-word;
}

body.night-mode .forum-row>.column {
  background: var(--card-dark-color);
  border-color: var(--card-dark-divider);
}

.forum-row>.column.icon {
  color: #999999;
  text-align: center;
}

.forum-row .sub-forums li {
  float: left;
  margin-right: 10px;
}

/* -- */

/* forum-meta */
.forum-meta-head {
  padding: 15px 20px 15px 20px;
  background-color: #16232d;
  color: #fff;
  font-size: 12px;
  font-weight: 300;
}

body.night-mode .forum-meta-head {
  background: var(--card-dark-input);
}

.forum-meta-conent {
  padding: 15px 20px 15px 20px;
  background-color: #fff;
  color: #808080;
  font-size: 12px;
}

.forum-meta-conent:last-child {
  border-radius: 0 0 16px 16px;
}

body.night-mode .forum-meta-conent {
  background-color: var(--card-dark-color);
}

/* -- */

/* forum-thread */
.forum-thread {
  padding: 20px 10px;
  margin-top: 10px;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}

body.night-mode .forum-thread {
  background: var(--card-dark-color);
}

.forum-thread .row {
  margin-left: 0;
  margin-right: 0;
}

.forum-thread .avatar {
  width: 80px;
  height: 80px;
  border-radius: 50%;
}

.forum-thread .time {
  padding-bottom: 5px;
  margin-bottom: 10px;
  border-bottom: 1px solid #f4f4f4;
}

body.night-mode .forum-thread .time {
  border-color: var(--card-dark-divider);
}

.forum-thread .text {
  word-wrap: break-word;
}

.forum-thread .text img,
.forum-thread .text iframe {
  max-width: 100%;
}

.forum-thread ul {
  margin: initial;
  padding-inline-start: 40px;
  list-style: initial;
}

/* -- */

/* forum-result */
.forum-result {
  margin-top: 20px;
}

.forum-result .head {
  padding: 10px 20px;
  background-color: #576c7c;
  color: #fff;
  border-radius: 16px 16px 0 0;
}

body.night-mode .forum-result .head {
  background-color: var(--card-dark-divider);
}

.forum-result .head a {
  color: #fff;
}

.forum-result .head a:hover {
  text-decoration: underline;
}

.forum-result .content {
  padding: 10px 20px;
  background-color: #ffffff;
  border-radius: 0 0 16px 16px;
}

body.night-mode .forum-result .content {
  background-color: var(--card-dark-color);
}

.forum-result .title {
  font-size: 14px;
}

.forum-result .snippet {
  background: #f4f4f4;
  padding: 8px 10px;
  word-wrap: break-word;
  border-radius: 16px;
}

body.night-mode .forum-result .snippet {
  background: var(--card-dark-input);
}

/* -- */

/* PAGE = [DIRECTORY] */
/* ------------------------------- */

.directory-card {
  display: block;
  width: 100%;
  height: 100%;
  background: #f6f7f9;
  padding: 25px;
  text-align: center;
  color: #555;
  border-radius: 16px;
}

body.night-mode .directory-card {
  background: var(--card-dark-input);
  color: var(--body-color-dark);
}

.directory-card:hover {
  background: #eee;
  color: #898f9c;
}

body.night-mode .directory-card:hover {
  background: var(--card-dark-hover);
}

.directory-card .title {
  margin-top: 15px;
  color: #4b4f56;
}

body.night-mode .directory-card .title {
  color: var(--link-color);
}

.directory-card p {
  margin-bottom: 0;
}

/* -- */

/* PAGE = [MESSAGES] */
/* ------------------------------- */

/* panel-messages */
.panel-messages .card-header .fa-circle {
  color: #65a830;
  font-size: 9px;
}

.panel-messages .card-body {
  padding: 0;
}

.panel-messages.fresh .card-body {
  position: relative;
}

.panel-messages .conversation-user {
  width: 50px;
  height: 50px;
}

.panel-messages .conversation-user img {
  width: 50px;
  height: 50px;
}

.panel-messages .conversation-body {
  /* 60px = (50px+10px) (avatars + margins) */
  max-width: calc(100% - 60px);
}

.panel-messages .conversation-body .text {
  background: #e9eaee;
}

/* -- */

/* PAGE = [LIVE] */
/* ------------------------------- */

.live-stream-wrapper {
  background: #323232;
  padding: 20px;
  border-radius: 16px;
}

body.night-mode .live-stream-wrapper {
  background: var(--card-dark-color);
}

@media (min-width: 992px) {
  .live-stream-wrapper {
    padding: 50px;
  }
}

.live-stream-title {
  color: #fff;
  font-size: 34px;
  line-height: 50px;
  margin-bottom: 10px;
}

.live-stream-video {
  position: relative;
  height: 500px;
}

.live-stream-video.large {
  height: 800px;
}

.live-stream-video .live-counter {
  position: absolute;
  top: 20px;
  left: 20px;
  z-index: 2;
}

.live-stream-video .live-counter .status {
  background: #dc3545;
  padding: 5px 15px;
  color: #fff;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 600;
}

.live-stream-video .live-counter .status.offline {
  background: #383838;
}

.live-stream-video .live-counter .number {
  background: #383838;
  padding: 5px 10px;
  margin-left: 4px;
  color: #fff;
  text-transform: uppercase;
  border-radius: 4px;
}

.live-stream-video .live-status {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  padding: 10px 25px;
  background: #383838;
  color: #fff;
  text-align: center;
  border-radius: 16px;
  z-index: 4;
}

.live-stream-video .live-status.info {
  background: #1171ef;
}

.live-stream-video .live-status.success {
  background: #28a745;
}

.live-stream-video .live-status.error {
  background: #dc3545;
}

.live-stream-video .live-recording {
  display: none;
  position: absolute;
  top: 20px;
  right: 20px;
  color: #ff0000;
  font-weight: 600;
  background: #383838;
  padding: 5px 10px;
  border-radius: 4px;
  z-index: 2;
}

.live-stream-video .live-comments {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 20px;
  height: 200px;
  z-index: 3;
  background-image: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 100%);
}

.live-stream-video video {
  border-radius: 4px;
  background: #000;
}

.live-stream-buttons {
  display: none;
  text-align: center;
  margin-top: 20px;
}

.live-stream-tips-wrapper {
  background: #111111;
  padding: 10px 15px;
  border-radius: 20px;
  margin-top: 8px;
  font-size: 12px;
  line-height: 18px;
}

/* -- */

/* PAGE = [PROFILE] */
/* ------------------------------- */

/* profile-header */
.profile-header {
  background: #fff;
  position: relative;
  margin-bottom: 20px;
  border-radius: 0 0 16px 16px;
}

body.night-mode .profile-header {
  background: var(--body-bg-color-dark);
}

@media (min-width: 992px) {
  .profile-header {
    margin-bottom: 40px;
  }
}

/* -- */

/* profile-cover-wrapper */
.profile-cover-wrapper {
  background: #424242;
  position: relative;
  height: 180px;
  overflow: hidden;
  border-radius: 0 0 16px 16px;
}

body.night-mode .profile-cover-wrapper {
  background: #151a1f;
}

@media (min-width: 576px) {
  .profile-cover-wrapper {
    height: 240px;
  }
}

@media (min-width: 768px) {
  .profile-cover-wrapper {
    height: 300px;
  }
}

@media (min-width: 992px) {
  .profile-cover-wrapper {
    height: 360px;
  }
}

/* -- */

/* profile-cover-wrapper -> img */
.profile-cover-wrapper img.js_position-cover-cropped {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.profile-cover-wrapper img.js_lightbox:hover {
  cursor: pointer;
}

.profile-cover-wrapper img.js_position-cover-full {
  width: 100%;
  height: auto;
  cursor: move;
}

/* -- */

/* profile-cover-wrapper -> buttons */
.profile-cover-buttons {
  position: absolute;
  top: 10px;
  left: 10px;
  color: #fff;
  font-size: 12px;
  opacity: 0.4;
  transition: all 0.5s;
}

@media (min-width: 768px) {
  .profile-cover-buttons {
    top: 15px;
    left: 15px;
    font-size: 16px;
  }
}

.profile-cover-buttons>div {
  float: left;
  margin-right: 5px;
  padding: 4px 8px;
  border-radius: 50%;
  text-align: center;
  background: rgba(0, 0, 0, 0.1);
  transition: all 0.5s;
}

.profile-cover-buttons>div:hover {
  cursor: pointer;
  background: rgba(0, 0, 0, 0.25);
}

.profile-cover-wrapper:hover .profile-cover-buttons {
  opacity: 1;
}

.profile-cover-buttons form.x-uploader {
  position: relative;
}

.profile-cover-buttons>div.profile-cover-position-buttons {
  display: none;
  padding: 4px 6px;
}

/* -- */

/* profile-cover-wrapper -> loaders */
.profile-cover-change-loader {
  display: none;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.5;
  background: #000;
  width: 100%;
  height: 100%;
  padding-top: 20%;
  transition: all 0.5s;
}

@media (min-width: 768px) {
  .profile-cover-change-loader {
    padding-top: 15%;
  }
}

.profile-cover-position-loader {
  display: none;
  position: absolute;
  top: 15px;
  left: 50%;
  padding: 8px 10px;
  background: rgba(0, 0, 0, 0.45);
  color: #fff;
  font-size: 11px;
  border-radius: 2px;
  transform: translate(-50%);
}

@media (min-width: 768px) {
  .profile-cover-position-loader {
    padding: 8px 24px;
    font-size: 13px;
    font-weight: 600;
  }
}

/* -- */

/* profile-avatar-wrapper */
.profile-avatar-wrapper {
  position: absolute;
  top: 112px;
  left: 50%;
  transform: translate(-50%);
  padding: 2px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.3);
}

@media (min-width: 576px) {
  .profile-avatar-wrapper {
    top: 140px;
  }
}

@media (min-width: 768px) {
  .profile-avatar-wrapper {
    top: 170px;
  }
}

body.night-mode .profile-avatar-wrapper {
  background: var(--body-bg-color-dark);
}

.profile-avatar-wrapper.static {
  top: 0;
}

@media (min-width: 992px) {
  .profile-avatar-wrapper {
    padding: 4px;
  }

  .profile-avatar-wrapper:not(.static) {
    top: auto;
    bottom: -25px;
    left: 55px;
    transform: none;
  }
}

/* profile-avatar-wrapper -> img */
.profile-avatar-wrapper img {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  transition: all 0.5s;
}

.profile-avatar-wrapper img.js_lightbox:hover {
  cursor: pointer;
}

@media (min-width: 576px) {
  .profile-avatar-wrapper img {
    width: 120px;
    height: 120px;
  }
}

@media (min-width: 768px) {
  .profile-avatar-wrapper img {
    width: 150px;
    height: 150px;
  }
}

@media (min-width: 992px) {
  .profile-avatar-wrapper img {
    width: 160px;
    height: 160px;
  }
}

/* -- */

/* profile-avatar-wrapper -> buttons */
.profile-avatar-change,
.profile-avatar-crop,
.profile-avatar-delete {
  display: block;
  position: absolute;
  bottom: 5px;
  right: 5px;
  opacity: 0.4;
  color: #fff;
  font-size: 12px;
  padding: 4px 8px;
  border-radius: 50%;
  text-align: center;
  background: rgba(0, 0, 0, 0.1);
  transition: all 0.5s;
}

.profile-avatar-change:hover,
.profile-avatar-crop:hover,
.profile-avatar-delete:hover {
  cursor: pointer;
  background: rgba(0, 0, 0, 0.25);
}

.profile-avatar-crop {
  bottom: 35px;
  right: -15px;
}

.profile-avatar-delete {
  bottom: 75px;
  right: 5px;
}

.profile-avatar-change form.x-uploader {
  position: relative;
}

@media (min-width: 576px) {
  .profile-avatar-delete {
    bottom: 75px;
    right: -15px;
  }
}

@media (min-width: 768px) {

  .profile-avatar-change,
  .profile-avatar-crop,
  .profile-avatar-delete {
    bottom: 10px;
    right: 10px;
    font-size: 16px;
  }

  .profile-avatar-crop {
    bottom: 45px;
    right: -10px;
  }

  .profile-avatar-delete {
    bottom: 85px;
    right: -15px;
  }
}

.profile-avatar-wrapper:hover .profile-avatar-change,
.profile-avatar-wrapper:hover .profile-avatar-delete,
.profile-avatar-wrapper:hover .profile-avatar-crop {
  opacity: 1;
}

/* -- */

/* profile-avatar-wrapper -> loaders */
.profile-avatar-change-loader {
  display: none;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  opacity: 0.5;
  background: #000;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  padding-top: 50%;
  transition: all 0.5s;
}

/* -- */

/* profile-name-wrapper */
.profile-name-wrapper {
  background: #fff;
  padding-top: 30px;
  padding-bottom: 10px;
  text-align: center;
  font-size: 1.2em;
  font-weight: 600;
}

body.night-mode .profile-name-wrapper {
  background: var(--body-bg-color-dark);
}

@media (min-width: 992px) {
  .profile-name-wrapper {
    position: absolute;
    bottom: 20px;
    left: 255px;
    right: auto;
    background: transparent !important;
    padding-top: 0;
    padding-bottom: 0;
    text-align: left;
    font-size: 1.9em;
    text-shadow: 0 0 3px rgba(0, 0, 0, 0.9);
  }

  .no-avatar .profile-name-wrapper {
    left: 85px;
    bottom: 40px;
  }
}

.profile-name-wrapper a {
  color: #333;
}

body.night-mode .profile-name-wrapper a {
  color: #fff;
}

.profile-name-wrapper a.badge {
  color: #fff;
}

@media (min-width: 992px) {
  .profile-name-wrapper a {
    color: #fff;
  }

  .profile-name-wrapper a.badge {
    font-size: 14px;
  }
}

/* -- */

/* profle-date-wrapper */
.profle-date-wrapper {
  position: absolute;
  width: 45px;
  left: 10px;
  top: 120px;
  padding: 6px;
  border-radius: 6px;
  border: 2px solid white;
  background: rgba(0, 0, 0, 0.1);
  text-align: center;
  font-size: 12px;
  color: #fff;

  transition: all 0.5s;
}

@media (min-width: 576px) {
  .profle-date-wrapper {
    top: 180px;
  }
}

@media (min-width: 768px) {
  .profle-date-wrapper {
    top: 240px;
  }
}

@media (min-width: 992px) {
  .profle-date-wrapper {
    width: 55px;
    left: 15px;
    top: auto;
    bottom: 20px;
    font-size: 14px;
  }
}

/* -- */

/* profle-meta-wrapper */
.profle-meta-wrapper {
  position: absolute;
  left: 65px;
  top: 140px;
  color: #e9e9e9;
  font-size: 12px;
  text-shadow: 0 0 3px rgba(0, 0, 0, 0.9);
}

@media (min-width: 576px) {
  .profle-meta-wrapper {
    top: 200px;
  }
}

@media (min-width: 768px) {
  .profle-meta-wrapper {
    top: 260px;
  }
}

@media (min-width: 992px) {
  .profle-meta-wrapper {
    left: 85px;
    top: auto;
    bottom: 20px;
    font-size: 14px;
  }
}

/* -- */

/* profile-buttons-wrapper */
.profile-buttons-wrapper {
  background: #fff;
  padding-bottom: 20px;
  text-align: center;
  border-radius: 0 0 16px 16px;
}

body.night-mode .profile-buttons-wrapper {
  background: var(--body-bg-color-dark);
}

@media (min-width: 992px) {
  .profile-buttons-wrapper {
    background: transparent !important;
    position: absolute;
    bottom: 20px;
    right: 15px;
    padding-bottom: 0;
    text-align: left;
  }
}

@media (max-width: 992px) {
  .profile-buttons-wrapper .btn {
    box-shadow: none;
  }
}

/* -- */

/* profile-tabs-wrapper */
.profile-tabs-wrapper {
  padding: 0 10px;
  background: #fff;
  border-radius: 16px;
  margin-bottom: 20px;
}

body.night-mode .profile-tabs-wrapper {
  background: var(--card-dark-color);
}


.profile-tabs-wrapper a {
  display: block;
  padding: 10px 5px;
  line-height: 20px;
  font-weight: 600;
  color: #666;
  transition: all 0.2s ease;
}

@media (min-width: 992px) {
  .profile-tabs-wrapper a {
    padding: 20px 25px;
  }
}


body.night-mode .profile-tabs-wrapper a {
  color: var(--body-color-dark);
}

.profile-tabs-wrapper a:hover,
body.night-mode .profile-tabs-wrapper a:hover {
  color: var(--link-color);
}

.profile-tabs-wrapper a.active,
body.night-mode .profile-tabs-wrapper a.active {
  color: var(--link-color);
  border-bottom: 2px solid var(--link-color);
}

/* -- */

/* panel-mutual-friends */
@media (max-width: 559px) {
  .panel-mutual-friends {
    display: none;
  }
}

.panel-mutual-friends li {
  float: left;
  width: 40px;
  height: 40px;
  margin-right: -8px;
}

/* -- */

/* panel [about] */
.about-bio {
  word-wrap: break-word;
  text-align: center;
  border-bottom: 1px solid #f4f4f4;
  margin-bottom: 10px;
  padding-bottom: 10px;
}

body.night-mode .about-bio {
  border-color: var(--card-dark-divider);
}

.about-bio a {
  display: inline-block;
  margin-top: 10px;
}

.about-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.about-list li {
  position: relative;
  padding-bottom: 5px;
  margin-bottom: 10px;
  font-weight: 500;
}

.about-list li.package {
  background: #597ba5;
  color: #fff;
  padding: 10px 15px;
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 15px;
  text-align: center;
  border-radius: 16px;
}

.about-list li:last-child {
  border-bottom: 0 none;
  padding-bottom: 0;
  margin-bottom: 0;
}

.about-list-item {
  padding-left: 40px;
  word-break: break-word;
}

.about-list-item a:hover {
  text-decoration: underline;
}

.about-list-item .svg-container {
  position: absolute;
  top: 0;
  left: 0;
}

.about-list-item .details {
  padding-top: 2px;
  font-size: 11px;
  line-height: 16px;
  font-weight: normal;
}

/* -- */

/* panel [photos] */
.panel-photos div[class^="col-"],
.panel-photos div[class*=" col-"] {
  padding: 1px;
  padding-bottom: 0;
}

.pg_photo {
  position: relative;
  display: block;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #eee;
  width: 100%;
  height: 100%;
  padding-top: 100%;
  min-width: 40px;
  min-height: 40px;
  border-radius: 12px;
  margin-bottom: 2px;
}

.pg_photo.large {
  min-width: 100px;
  min-height: 100px;
}

.pg_photo-delete-btn {
  position: absolute;
  right: 5px;
  top: 5px;
}

.pg_photo-pin-btn {
  position: absolute;
  left: 5px;
  top: 5px;
  background: rgb(0 0 0 / 50%);
  padding: 3px 8px;
  border-radius: 16px;
  color: #eee;
}

.pg_photo-pin-btn.pinned {
  color: #ffeb3b;
}

/* -- */

/* panel [videos] */
.panel-videos div[class^="col-"],
.panel-videos div[class*=" col-"] {
  padding: 1px;
  padding-bottom: 0;
}

.pg_video {
  position: relative;
  background: #eee;
  display: block;
  padding-bottom: 100%;
  overflow: hidden;
}

.pg_video video {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  object-fit: cover;
  width: 100%;
  height: 100%;
}

.pg_video .play-button {
  position: absolute;
  top: calc(50% - 25px);
  left: calc(50% - 25px);
  display: block;
  width: 50px;
  height: 50px;
  padding-top: 11px;
  padding-left: 6px;
  border-radius: 50%;
  color: #f5f5f5;
  text-align: center;
  background-color: rgba(0, 0, 0, 0.5);
  transition: all 0.3s ease;
}

.pg_video:hover .play-button {
  background-color: rgba(0, 0, 0, 0.8);
  box-shadow: 0px 0px 10px rgba(255, 255, 100, 1);
}

/* -- */

/* album-card */
.album-card {
  border: 1px solid #f4f4f4;
  border-radius: 16px;
  margin-bottom: 10px;
}

body.night-mode .album-card {
  border-color: var(--card-dark-divider);
}

.album-cover {
  display: block;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #eee;
  width: 100%;
  height: 100%;
  padding-top: 100%;
  overflow: hidden;
  min-width: 40px;
  min-height: 40px;
  border-radius: 16px 16px 0 0;
}

.album-details {
  padding: 20px;
}

.album-details .fa {
  cursor: pointer;
}

.album-details .tooltip {
  width: auto;
  min-width: 110px;
  font-size: 11px;
}

/* -- */

/* album */
.album-title {
  text-align: center;
  font-size: 1.5em;
  font-weight: 600;
  margin-top: 20px;
}

.album-meta {
  text-align: center;
  margin-bottom: 40px;
}

/* -- */

/* PAGE = [ADMIN] */
/* ------------------------------- */

/* admin sidebar */
@media (max-width: 767px) {
  .admin-sidebar {
    background: #fff;
    border-radius: 16px;
  }

  body.night-mode .admin-sidebar {
    background: var(--card-dark-color);
  }

}

/* -- */

/* admin-chart */
.admin-chart {
  min-width: 100%;
  height: 400px;
  margin: 0 auto;
  border: 1px solid #e6ecf5;
}

body.night-mode .admin-chart {
  border-color: var(--card-dark-divider);
}

body.night-mode .admin-chart .highcharts-title,
body.night-mode .admin-chart .highcharts-axis>*,
body.night-mode .admin-chart .highcharts-axis-labels>*,
body.night-mode .admin-chart .highcharts-legend-item text {
  color: var(--body-color-dark) !important;
  fill: var(--body-color-dark) !important;
}

/* -- */

/* table-img-thumbnail */
.table-img-thumbnail {
  max-width: 100px;
}

/* -- */

/* change-log-list */
.change-log-list {
  margin-left: 30px;
}

.change-log-list>li {
  margin-left: 30px;
  list-style-type: disc;
}

/* -- */

/* auto-connect-nodes */
.add-auto-connect-node {
  background: #f7f7f7;
  margin: 10px 0;
  padding: 10px;
  font-weight: 600;
  text-align: center;
  border: 1px solid #ddd;
  border-radius: 16px;
  cursor: pointer;
}

.add-auto-connect-node :hover {
  background: #f3f3f3;
}

body.night-mode .add-auto-connect-node {
  background: var(--card-dark-input);
  border-color: var(--card-dark-divider);
}

body.night-mode .add-auto-connect-node :hover {
  background: var(--card-dark-color);
}

.auto-connect-node {
  margin: 10px 0;
  padding: 20px 30px 0;
  border: 1px solid #ddd;
  border-radius: 16px;
}

body.night-mode .auto-connect-node {
  border-color: var(--card-dark-divider);
}

/* -- */

/* PAGE = [MARKET] */
/* ------------------------------- */

.product {
  position: relative;
  border-radius: 16px;
}

.product:not(.active):hover {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.product.active {
  border: 1px solid #f4f4f4;
}

body.night-mode .product.active {
  border-color: var(--card-dark-divider);
}

.product.boosted {
  border: 2px solid #f9b340;
}

.product .boosted-icon {
  position: absolute;
  left: -15px;
  top: -15px;
  width: auto;
  padding: 3px 6px;
  font-size: 16px;
  background: #f9b340;
  color: #ffffff;
  border-radius: 50%;
  transform: rotate(-20deg);
  z-index: 2;
}

.product-image {
  position: relative;
  width: 100%;
  height: 250px;
  overflow: hidden;
  border-radius: 16px 16px 0 0;
}

.product-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.product-price {
  position: absolute;
  left: 10px;
  bottom: 10px;
  background: rgba(0, 0, 0, 0.65);
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  line-height: 1;
  padding: 6px 10px;
  border-radius: 6px;
}

.product-price.with-offer {
  font-size: 14px;
  font-weight: normal;
}

.product-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  padding-top: 100px;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-align: center;
  opacity: 0;
  transition: all 300ms;
}

.product:hover .product-overlay {
  opacity: 1;
}

.product-info {
  padding: 10px;
}

.product-meta {
  overflow: hidden;
  word-break: break-all;
  text-overflow: ellipsis;
  white-space: nowrap;
  margin-bottom: 10px;
}

.product-meta .title {
  font-size: 18px;
  font-weight: bold;
}

/* -- */

/* invoice */
.invoice-title h2,
.invoice-title h3 {
  display: inline-block;
}

.table-invoice>tbody>tr>.no-line {
  border-top: none;
}

.table-invoice>thead>tr>.no-line {
  border-bottom: none;
}

.table-invoice>tbody>tr>.thick-line {
  border-top: 2px solid;
}

/* -- */

/* -- */

/* PAGE = [MOVIES] */
/* ------------------------------- */

.movie-card {
  margin-bottom: 20px;
}

.movie-card-top {
  position: relative;
  display: block;
  border: 5px solid #fff;
  border-radius: 4px;
  margin-bottom: 10px;
}

body.night-mode .movie-card-top {
  border-color: var(--card-dark-divider);
}

.movie-picture {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top center;
  background-color: #fff;
  width: 100%;
  height: 100%;
  min-height: 330px;
}

.movie-info {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  padding-top: 70px;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-align: center;
  opacity: 0;
  transition: all 300ms;
  transition-delay: 100ms;
}

.movie-info .meta {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
}

.movie-card-top:hover .movie-info {
  opacity: 1;
}

.movie-card-bottom {
  margin: 0 auto;
  padding: 0 5px;
  text-align: left;
}

.movie-title {
  display: block;
  font-weight: 700;
  transition: color 0.15s ease-in-out;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.movie-year {
  margin-top: 5x;
}

/* -- */

/* NOTY NOTIFICATION */
/* ------------------------------- */

.noty_theme__mint.noty_type__info,
.noty_theme__mint.noty_type__information {
  background-color: rgba(51, 103, 214, 0.8) !important;
  border-bottom: 1px solid #3367d6 !important;
}

.noty_bar {
  margin-bottom: 5px !important;
}

.noty_body {
  color: #fff !important;
  padding: 5px !important;
}

.noty_body .data-content,
.noty_close_button {
  color: #fff !important;
}

/* -- */

/* TRANSLATOR */
/* ------------------------------- */

.translator-language {
  display: block;
  font-size: 15px;
  line-height: 100%;
  padding: 15px;
  margin-bottom: 5px;
  border: 1px solid #eee;
  border-radius: 1px;
}

.translator-language:hover {
  background: #f3f3f3;
  cursor: pointer;
}

/* -- */

/* BIG ICON */
/* ------------------------------- */

.big-icon {
  width: 80px;
  height: 80px;
  border: 4px solid rgba(128, 128, 128, 0.15);
  border-radius: 50%;
  margin: 20px auto;
  position: relative;
}

.big-icon.success {
  border-color: rgba(76, 174, 76, 0.15);
}

.big-icon.error {
  border-color: rgba(217, 83, 79, 0.15);
}

.big-icon.warning {
  border-color: rgba(255, 153, 0, 0.21);
}

.big-icon .fa {
  padding-top: 17px;
  padding-left: 3px;
}

.big-icon.success .fa {
  color: #4cae4c;
}

.big-icon.error .fa {
  color: #d9534f;
}

.big-icon.warning .fa {
  color: #d9954f;
}

/* -- */

/* LOADER */
/* ------------------------------- */

.x-loader {
  text-align: center;
}

.loader {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -moz-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 5px 0;
}

.loader:after {
  display: block;
  position: relative;
  width: 20px;
  height: 20px;
  -webkit-animation: rotate 0.6s linear infinite;
  -moz-animation: rotate 0.6s linear infinite;
  -ms-animation: rotate 0.6s linear infinite;
  -o-animation: rotate 0.6s linear infinite;
  animation: rotate 0.6s linear infinite;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  border-top: 1px solid #545a6a;
  border-bottom: 1px solid #d4d4db;
  border-left: 1px solid #545a6a;
  border-right: 1px solid #d4d4db;
  content: "";
  opacity: 0.5;
}

.loader.loader_large:after {
  width: 40px;
  height: 40px;
}

.loader.loader_medium:after {
  width: 25px;
  height: 25px;
}

.loader.loader_small:after {
  width: 10px;
  height: 10px;
}

.loader.loader_green:after {
  opacity: 1;
  border-top: 1px solid #42a26e;
  border-bottom: 1px solid #fff;
  border-left: 1px solid #42a26e;
  border-right: 1px solid #fff;
}

@keyframes rotate {
  0% {
    transform: rotateZ(-360deg);
    -webkit-transform: rotateZ(-360deg);
    -moz-transform: rotateZ(-360deg);
    -o-transform: rotateZ(-360deg);
  }

  100% {
    transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
  }
}

@-webkit-keyframes rotate {
  0% {
    transform: rotateZ(-360deg);
    -webkit-transform: rotateZ(-360deg);
    -moz-transform: rotateZ(-360deg);
    -o-transform: rotateZ(-360deg);
  }

  100% {
    transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
  }
}

@-moz-keyframes rotate {
  0% {
    transform: rotateZ(-360deg);
    -webkit-transform: rotateZ(-360deg);
    -moz-transform: rotateZ(-360deg);
    -o-transform: rotateZ(-360deg);
  }

  100% {
    transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
  }
}

@-o-keyframes rotate {
  0% {
    transform: rotateZ(-360deg);
    -webkit-transform: rotateZ(-360deg);
    -moz-transform: rotateZ(-360deg);
    -o-transform: rotateZ(-360deg);
  }

  100% {
    transform: rotateZ(0deg);
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
  }
}

/* -- */

/* POST LOADER */
/* ------------------------------- */
@keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

@-o-keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

@-ms-keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

@-moz-keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

@-webkit-keyframes anim {
  0% {
    background-position: -468px 0;
  }

  100% {
    background-position: 468px 0;
  }
}

.panel-effect {
  position: relative;
  background: #f6f7f8 no-repeat 800px 104px;
  background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y2ZjdmOCIvPjxzdG9wIG9mZnNldD0iMjAlIiBzdG9wLWNvbG9yPSIjZWRlZWYxIi8+PHN0b3Agb2Zmc2V0PSI0MCUiIHN0b3AtY29sb3I9IiNmNmY3ZjgiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNmY3ZjgiLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyYWQpIiAvPjwvc3ZnPiA=");
  background-size: 100%;
  background-image: -webkit-gradient(linear,
      0% 50%,
      100% 50%,
      color-stop(0%, #f6f7f8),
      color-stop(20%, #edeef1),
      color-stop(40%, #f6f7f8),
      color-stop(100%, #f6f7f8));
  background-image: -moz-linear-gradient(left,
      #f6f7f8 0%,
      #edeef1 20%,
      #f6f7f8 40%,
      #f6f7f8 100%);
  background-image: -webkit-linear-gradient(left,
      #f6f7f8 0%,
      #edeef1 20%,
      #f6f7f8 40%,
      #f6f7f8 100%);
  background-image: linear-gradient(to right,
      #f6f7f8 0%,
      #edeef1 20%,
      #f6f7f8 40%,
      #f6f7f8 100%);
  height: 104px;
  -moz-animation: anim 1s forwards infinite linear;
  -webkit-animation: anim 1s forwards infinite linear;
  animation: anim 1s forwards infinite linear;
}

.fake-effect {
  position: absolute;
  background: #fff;
  right: 0;
  left: 0;
  height: 6px;
}

.fe-0 {
  height: 40px;
  left: 40px;
  width: 8px;
}

.fe-1 {
  height: 8px;
  left: 48px;
  top: 0;
  right: 0;
}

.fe-2 {
  left: 136px;
  top: 8px;
}

.fe-3 {
  height: 12px;
  left: 48px;
  top: 14px;
}

.fe-4 {
  left: 100px;
  top: 26px;
}

.fe-5 {
  height: 10px;
  left: 48px;
  top: 32px;
}

.fe-6 {
  height: 20px;
  top: 40px;
}

.fe-7 {
  left: 410px;
  top: 60px;
}

.fe-8 {
  height: 13px;
  top: 66px;
}

.fe-9 {
  left: 440px;
  top: 79px;
}

.fe-10 {
  height: 13px;
  top: 85px;
}

.fe-11 {
  left: 178px;
  top: 98px;
}

/* -- */

/* ON/OFF TOGGLE */
/* ------------------------------- */

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin: 0;
}

.switch.sm {
  width: 30px;
  height: 17px;
}

.switch input {
  display: none;
}

.switch .slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: 0.4s;
}

body.night-mode .switch .slider {
  background-color: #666;
}

.switch .slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: 0.4s;
}

.switch.sm .slider:before {
  height: 13px;
  width: 13px;
  left: 2px;
  bottom: 2px;
}

.switch input:checked+.slider {
  background-color: var(--link-color);
}

.switch input:focus+.slider {
  box-shadow: 0 0 1px #2196f3;
}

.switch input:checked+.slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

.switch.sm input:checked+.slider:before {
  -webkit-transform: translateX(13px);
  -ms-transform: translateX(13px);
  transform: translateX(13px);
}

.switch .slider.round {
  border-radius: 34px;
}

.switch .slider.round:before {
  border-radius: 50%;
}

/* -- */

/* CUSTOM RADIO/CHECKBOX TEMPLATES */
/* ------------------------------- */

.button-label {
  display: inline-block;
  padding: 1em 2em;
  margin: 0.5em;
  cursor: pointer;
  color: #6c6c6c;
  border-radius: 6px;
  transition: 0.3s;
  box-shadow: 0 0 0 1px #e6e6e6;
  min-width: 115px;
}

.button-label.small {
  min-width: 80px;
}

body.night-mode .button-label {
  box-shadow: 0 0 0 1px var(--card-dark-divider);
  color: var(--body-color-dark);
}

.button-label-image {
  display: block;
  padding: 5px;
  margin: 0px;
  width: 100%;
  height: 100%;
  box-shadow: none;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 2px;
}

.button-label .icon {
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f3f3f3;
  height: 60px;
  width: 60px;
  margin: 0 auto;
  border-radius: 50%;
  transition: all 0.2s;
  opacity: 0.75;
  filter: grayscale(1);
}

body.night-mode .button-label .icon {
  background: var(--card-dark-input);
}

.button-label.small .icon {
  width: 30px;
  height: 30px;
}

.button-label .icon img {
  width: 32px;
  height: 32px;
}

.button-label-image img {
  width: 100%;
  height: 100%;
  border-radius: 2px;
}

.button-label .title {
  font-weight: 500;
  font-size: 14px;
  margin-top: 15px;
  text-transform: capitalize;
  text-align: center;
}

.button-label:hover,
.button-label-image:hover {
  box-shadow: 0px 0px 0px 2px rgba(51, 103, 214, 0.65);
}

.input-label:checked+.button-label,
.input-label:checked+.button-label-image {
  box-shadow: 0px 0px 0px 2px rgba(51, 103, 214, 0.65);
}

.input-label:checked+.button-label .icon {
  filter: grayscale(0);
  opacity: 1;
}

/* -- */

/* SOCIAL BUTTONS */
/* ------------------------------- */

.btn-social,
.btn-social-icon {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.btn-adn.active,
.btn-adn:active,
.btn-bitbucket.active,
.btn-bitbucket:active,
.btn-dropbox.active,
.btn-dropbox:active,
.btn-facebook.active,
.btn-facebook:active,
.btn-flickr.active,
.btn-flickr:active,
.btn-foursquare.active,
.btn-foursquare:active,
.btn-github.active,
.btn-github:active,
.btn-google.active,
.btn-google:active,
.btn-instagram.active,
.btn-instagram:active,
.btn-twitch.active,
.btn-twitch:active,
.btn-microsoft.active,
.btn-microsoft:active,
.btn-openid.active,
.btn-openid:active,
.btn-pinterest.active,
.btn-pinterest:active,
.btn-reddit.active,
.btn-reddit:active,
.btn-soundcloud.active,
.btn-soundcloud:active,
.btn-tumblr.active,
.btn-tumblr:active,
.btn-twitter.active,
.btn-twitter:active,
.btn-vimeo.active,
.btn-vimeo:active,
.btn-vk.active,
.btn-vk:active,
.btn-wordpress.active,
.btn-wordpress:active,
.btn-yahoo.active,
.btn-yahoo:active,
.open>.dropdown-toggle.btn-adn,
.open>.dropdown-toggle.btn-bitbucket,
.open>.dropdown-toggle.btn-dropbox,
.open>.dropdown-toggle.btn-facebook,
.open>.dropdown-toggle.btn-flickr,
.open>.dropdown-toggle.btn-foursquare,
.open>.dropdown-toggle.btn-github,
.open>.dropdown-toggle.btn-google,
.open>.dropdown-toggle.btn-instagram,
.open>.dropdown-toggle.btn-twitch,
.open>.dropdown-toggle.btn-microsoft,
.open>.dropdown-toggle.btn-openid,
.open>.dropdown-toggle.btn-pinterest,
.open>.dropdown-toggle.btn-reddit,
.open>.dropdown-toggle.btn-soundcloud,
.open>.dropdown-toggle.btn-tumblr,
.open>.dropdown-toggle.btn-twitter,
.open>.dropdown-toggle.btn-vimeo,
.open>.dropdown-toggle.btn-vk,
.open>.dropdown-toggle.btn-wordpress,
.open>.dropdown-toggle.btn-yahoo {
  background-image: none;
}

.btn-social {
  position: relative;
  padding-left: 44px;
  text-align: left;
}

.btn-social> :first-child {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 32px;
  line-height: 34px;
  font-size: 1.6em;
  text-align: center;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
}

.btn-social.btn-lg {
  padding-left: 61px;
}

.btn-social.btn-lg> :first-child {
  line-height: 45px;
  width: 45px;
  font-size: 1.8em;
}

.btn-social.btn-sm {
  padding-left: 38px;
}

.btn-social.btn-sm> :first-child {
  line-height: 28px;
  width: 28px;
  font-size: 1.4em;
}

.btn-social.btn-xs {
  padding-left: 30px;
}

.btn-social.btn-xs> :first-child {
  line-height: 20px;
  width: 20px;
  font-size: 1.2em;
}

.btn-social-icon {
  position: relative;
  text-align: left;
  height: 34px;
  width: 34px;
  padding: 0;
}

.btn-social-icon> :first-child {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  line-height: 34px;
  font-size: 1.6em;
}

.btn-social-icon.btn-lg> :first-child {
  line-height: 45px;
  width: 45px;
  font-size: 1.8em;
}

.btn-social-icon.btn-sm> :first-child {
  line-height: 30px;
  width: 28px;
  font-size: 1.4em;
}

.btn-social-icon.btn-xs> :first-child {
  line-height: 20px;
  width: 20px;
  font-size: 1.2em;
}

.btn-social-icon> :first-child {
  border: none;
  text-align: center;
  width: 100% !important;
}

.btn-social-icon.btn-lg {
  height: 45px;
  width: 45px;
  padding-left: 0;
  padding-right: 0;
}

.btn-social-icon.btn-sm {
  height: 30px;
  width: 30px;
  padding-left: 0;
  padding-right: 0;
}

.btn-social-icon.btn-xs {
  height: 22px;
  width: 22px;
  padding-left: 0;
  padding-right: 0;
}

.btn-adn {
  color: #fff;
  background-color: #d87a68;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-adn.active,
.btn-adn:active,
.btn-adn:focus,
.btn-adn:hover,
.open>.dropdown-toggle.btn-adn {
  color: #fff;
  background-color: #ce563f;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-adn.disabled,
.btn-adn.disabled.active,
.btn-adn.disabled:active,
.btn-adn.disabled:focus,
.btn-adn.disabled:hover,
.btn-adn[disabled],
.btn-adn[disabled].active,
.btn-adn[disabled]:active,
.btn-adn[disabled]:focus,
.btn-adn[disabled]:hover,
fieldset[disabled] .btn-adn,
fieldset[disabled] .btn-adn.active,
fieldset[disabled] .btn-adn:active,
fieldset[disabled] .btn-adn:focus,
fieldset[disabled] .btn-adn:hover {
  background-color: #d87a68;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-adn .badge {
  color: #d87a68;
  background-color: #fff;
}

.btn-bitbucket {
  color: #fff;
  background-color: #205081;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-bitbucket.active,
.btn-bitbucket:active,
.btn-bitbucket:focus,
.btn-bitbucket:hover,
.open>.dropdown-toggle.btn-bitbucket {
  color: #fff;
  background-color: #163758;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-bitbucket.disabled,
.btn-bitbucket.disabled.active,
.btn-bitbucket.disabled:active,
.btn-bitbucket.disabled:focus,
.btn-bitbucket.disabled:hover,
.btn-bitbucket[disabled],
.btn-bitbucket[disabled].active,
.btn-bitbucket[disabled]:active,
.btn-bitbucket[disabled]:focus,
.btn-bitbucket[disabled]:hover,
fieldset[disabled] .btn-bitbucket,
fieldset[disabled] .btn-bitbucket.active,
fieldset[disabled] .btn-bitbucket:active,
fieldset[disabled] .btn-bitbucket:focus,
fieldset[disabled] .btn-bitbucket:hover {
  background-color: #205081;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-bitbucket .badge {
  color: #205081;
  background-color: #fff;
}

.btn-dropbox {
  color: #fff;
  background-color: #1087dd;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-dropbox.active,
.btn-dropbox:active,
.btn-dropbox:focus,
.btn-dropbox:hover,
.open>.dropdown-toggle.btn-dropbox {
  color: #fff;
  background-color: #0d6aad;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-dropbox.disabled,
.btn-dropbox.disabled.active,
.btn-dropbox.disabled:active,
.btn-dropbox.disabled:focus,
.btn-dropbox.disabled:hover,
.btn-dropbox[disabled],
.btn-dropbox[disabled].active,
.btn-dropbox[disabled]:active,
.btn-dropbox[disabled]:focus,
.btn-dropbox[disabled]:hover,
fieldset[disabled] .btn-dropbox,
fieldset[disabled] .btn-dropbox.active,
fieldset[disabled] .btn-dropbox:active,
fieldset[disabled] .btn-dropbox:focus,
fieldset[disabled] .btn-dropbox:hover {
  background-color: #1087dd;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-dropbox .badge {
  color: #1087dd;
  background-color: #fff;
}

.btn-facebook {
  color: #fff;
  background-color: #3b5998;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-facebook.active,
.btn-facebook:active,
.btn-facebook:focus,
.btn-facebook:hover,
.open>.dropdown-toggle.btn-facebook {
  color: #fff;
  background-color: #2d4373;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-facebook.disabled,
.btn-facebook.disabled.active,
.btn-facebook.disabled:active,
.btn-facebook.disabled:focus,
.btn-facebook.disabled:hover,
.btn-facebook[disabled],
.btn-facebook[disabled].active,
.btn-facebook[disabled]:active,
.btn-facebook[disabled]:focus,
.btn-facebook[disabled]:hover,
fieldset[disabled] .btn-facebook,
fieldset[disabled] .btn-facebook.active,
fieldset[disabled] .btn-facebook:active,
fieldset[disabled] .btn-facebook:focus,
fieldset[disabled] .btn-facebook:hover {
  background-color: #3b5998;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-facebook .badge {
  color: #3b5998;
  background-color: #fff;
}

.btn-flickr {
  color: #fff;
  background-color: #ff0084;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-flickr.active,
.btn-flickr:active,
.btn-flickr:focus,
.btn-flickr:hover,
.open>.dropdown-toggle.btn-flickr {
  color: #fff;
  background-color: #cc006a;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-flickr.disabled,
.btn-flickr.disabled.active,
.btn-flickr.disabled:active,
.btn-flickr.disabled:focus,
.btn-flickr.disabled:hover,
.btn-flickr[disabled],
.btn-flickr[disabled].active,
.btn-flickr[disabled]:active,
.btn-flickr[disabled]:focus,
.btn-flickr[disabled]:hover,
fieldset[disabled] .btn-flickr,
fieldset[disabled] .btn-flickr.active,
fieldset[disabled] .btn-flickr:active,
fieldset[disabled] .btn-flickr:focus,
fieldset[disabled] .btn-flickr:hover {
  background-color: #ff0084;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-flickr .badge {
  color: #ff0084;
  background-color: #fff;
}

.btn-foursquare {
  color: #fff;
  background-color: #f94877;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-foursquare.active,
.btn-foursquare:active,
.btn-foursquare:focus,
.btn-foursquare:hover,
.open>.dropdown-toggle.btn-foursquare {
  color: #fff;
  background-color: #f71752;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-foursquare.disabled,
.btn-foursquare.disabled.active,
.btn-foursquare.disabled:active,
.btn-foursquare.disabled:focus,
.btn-foursquare.disabled:hover,
.btn-foursquare[disabled],
.btn-foursquare[disabled].active,
.btn-foursquare[disabled]:active,
.btn-foursquare[disabled]:focus,
.btn-foursquare[disabled]:hover,
fieldset[disabled] .btn-foursquare,
fieldset[disabled] .btn-foursquare.active,
fieldset[disabled] .btn-foursquare:active,
fieldset[disabled] .btn-foursquare:focus,
fieldset[disabled] .btn-foursquare:hover {
  background-color: #f94877;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-foursquare .badge {
  color: #f94877;
  background-color: #fff;
}

.btn-github {
  color: #fff;
  background-color: #444;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-github.active,
.btn-github:active,
.btn-github:focus,
.btn-github:hover,
.open>.dropdown-toggle.btn-github {
  color: #fff;
  background-color: #2b2b2b;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-github.disabled,
.btn-github.disabled.active,
.btn-github.disabled:active,
.btn-github.disabled:focus,
.btn-github.disabled:hover,
.btn-github[disabled],
.btn-github[disabled].active,
.btn-github[disabled]:active,
.btn-github[disabled]:focus,
.btn-github[disabled]:hover,
fieldset[disabled] .btn-github,
fieldset[disabled] .btn-github.active,
fieldset[disabled] .btn-github:active,
fieldset[disabled] .btn-github:focus,
fieldset[disabled] .btn-github:hover {
  background-color: #444;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-github .badge {
  color: #444;
  background-color: #fff;
}

.btn-google {
  color: #fff;
  background-color: #dd4b39;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-google.active,
.btn-google:active,
.btn-google:focus,
.btn-google:hover,
.open>.dropdown-toggle.btn-google {
  color: #fff;
  background-color: #c23321;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-google.disabled,
.btn-google.disabled.active,
.btn-google.disabled:active,
.btn-google.disabled:focus,
.btn-google.disabled:hover,
.btn-google[disabled],
.btn-google[disabled].active,
.btn-google[disabled]:active,
.btn-google[disabled]:focus,
.btn-google[disabled]:hover,
fieldset[disabled] .btn-google,
fieldset[disabled] .btn-google.active,
fieldset[disabled] .btn-google:active,
fieldset[disabled] .btn-google:focus,
fieldset[disabled] .btn-google:hover {
  background-color: #dd4b39;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-google .badge {
  color: #dd4b39;
  background-color: #fff;
}

.btn-instagram {
  color: #fff;
  background-color: #3f729b;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-instagram.active,
.btn-instagram:active,
.btn-instagram:focus,
.btn-instagram:hover,
.open>.dropdown-toggle.btn-instagram {
  color: #fff;
  background-color: #305777;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-instagram.disabled,
.btn-instagram.disabled.active,
.btn-instagram.disabled:active,
.btn-instagram.disabled:focus,
.btn-instagram.disabled:hover,
.btn-instagram[disabled],
.btn-instagram[disabled].active,
.btn-instagram[disabled]:active,
.btn-instagram[disabled]:focus,
.btn-instagram[disabled]:hover,
fieldset[disabled] .btn-instagram,
fieldset[disabled] .btn-instagram.active,
fieldset[disabled] .btn-instagram:active,
fieldset[disabled] .btn-instagram:focus,
fieldset[disabled] .btn-instagram:hover {
  background-color: #3f729b;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-instagram .badge {
  color: #3f729b;
  background-color: #fff;
}

.btn-twitch {
  color: #fff;
  background-color: #9146ff;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-twitch.active,
.btn-twitch:active,
.btn-twitch:focus,
.btn-twitch:hover,
.open>.dropdown-toggle.btn-twitch {
  color: #fff;
  background-color: #552a93;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-twitch.disabled,
.btn-twitch.disabled.active,
.btn-twitch.disabled:active,
.btn-twitch.disabled:focus,
.btn-twitch.disabled:hover,
.btn-twitch[disabled],
.btn-twitch[disabled].active,
.btn-twitch[disabled]:active,
.btn-twitch[disabled]:focus,
.btn-twitch[disabled]:hover,
fieldset[disabled] .btn-twitch,
fieldset[disabled] .btn-twitch.active,
fieldset[disabled] .btn-twitch:active,
fieldset[disabled] .btn-twitch:focus,
fieldset[disabled] .btn-twitch:hover {
  background-color: #3f729b;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-twitch .badge {
  color: #3f729b;
  background-color: #fff;
}

.btn-linkedin {
  color: #fff;
  background-color: #007bb6;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-linkedin.active,
.btn-linkedin:active,
.btn-linkedin:focus,
.btn-linkedin:hover,
.open>.dropdown-toggle.btn-linkedin {
  color: #fff;
  background-color: #005983;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-linkedin.active,
.btn-linkedin:active,
.open>.dropdown-toggle.btn-linkedin {
  background-image: none;
}

.btn-linkedin.disabled,
.btn-linkedin.disabled.active,
.btn-linkedin.disabled:active,
.btn-linkedin.disabled:focus,
.btn-linkedin.disabled:hover,
.btn-linkedin[disabled],
.btn-linkedin[disabled].active,
.btn-linkedin[disabled]:active,
.btn-linkedin[disabled]:focus,
.btn-linkedin[disabled]:hover,
fieldset[disabled] .btn-linkedin,
fieldset[disabled] .btn-linkedin.active,
fieldset[disabled] .btn-linkedin:active,
fieldset[disabled] .btn-linkedin:focus,
fieldset[disabled] .btn-linkedin:hover {
  background-color: #007bb6;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-linkedin .badge {
  color: #007bb6;
  background-color: #fff;
}

.btn-microsoft {
  color: #fff;
  background-color: #2672ec;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-microsoft.active,
.btn-microsoft:active,
.btn-microsoft:focus,
.btn-microsoft:hover,
.open>.dropdown-toggle.btn-microsoft {
  color: #fff;
  background-color: #125acd;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-microsoft.disabled,
.btn-microsoft.disabled.active,
.btn-microsoft.disabled:active,
.btn-microsoft.disabled:focus,
.btn-microsoft.disabled:hover,
.btn-microsoft[disabled],
.btn-microsoft[disabled].active,
.btn-microsoft[disabled]:active,
.btn-microsoft[disabled]:focus,
.btn-microsoft[disabled]:hover,
fieldset[disabled] .btn-microsoft,
fieldset[disabled] .btn-microsoft.active,
fieldset[disabled] .btn-microsoft:active,
fieldset[disabled] .btn-microsoft:focus,
fieldset[disabled] .btn-microsoft:hover {
  background-color: #2672ec;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-microsoft .badge {
  color: #2672ec;
  background-color: #fff;
}

.btn-openid {
  color: #fff;
  background-color: #f7931e;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-openid.active,
.btn-openid:active,
.btn-openid:focus,
.btn-openid:hover,
.open>.dropdown-toggle.btn-openid {
  color: #fff;
  background-color: #da7908;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-openid.disabled,
.btn-openid.disabled.active,
.btn-openid.disabled:active,
.btn-openid.disabled:focus,
.btn-openid.disabled:hover,
.btn-openid[disabled],
.btn-openid[disabled].active,
.btn-openid[disabled]:active,
.btn-openid[disabled]:focus,
.btn-openid[disabled]:hover,
fieldset[disabled] .btn-openid,
fieldset[disabled] .btn-openid.active,
fieldset[disabled] .btn-openid:active,
fieldset[disabled] .btn-openid:focus,
fieldset[disabled] .btn-openid:hover {
  background-color: #f7931e;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-openid .badge {
  color: #f7931e;
  background-color: #fff;
}

.btn-pinterest {
  color: #fff;
  background-color: #cb2027;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-pinterest.active,
.btn-pinterest:active,
.btn-pinterest:focus,
.btn-pinterest:hover,
.open>.dropdown-toggle.btn-pinterest {
  color: #fff;
  background-color: #9f191f;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-pinterest.disabled,
.btn-pinterest.disabled.active,
.btn-pinterest.disabled:active,
.btn-pinterest.disabled:focus,
.btn-pinterest.disabled:hover,
.btn-pinterest[disabled],
.btn-pinterest[disabled].active,
.btn-pinterest[disabled]:active,
.btn-pinterest[disabled]:focus,
.btn-pinterest[disabled]:hover,
fieldset[disabled] .btn-pinterest,
fieldset[disabled] .btn-pinterest.active,
fieldset[disabled] .btn-pinterest:active,
fieldset[disabled] .btn-pinterest:focus,
fieldset[disabled] .btn-pinterest:hover {
  background-color: #cb2027;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-pinterest .badge {
  color: #cb2027;
  background-color: #fff;
}

.btn-reddit {
  color: #000;
  background-color: #eff7ff;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-reddit.active,
.btn-reddit:active,
.btn-reddit:focus,
.btn-reddit:hover,
.open>.dropdown-toggle.btn-reddit {
  color: #000;
  background-color: #bcddff;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-reddit.disabled,
.btn-reddit.disabled.active,
.btn-reddit.disabled:active,
.btn-reddit.disabled:focus,
.btn-reddit.disabled:hover,
.btn-reddit[disabled],
.btn-reddit[disabled].active,
.btn-reddit[disabled]:active,
.btn-reddit[disabled]:focus,
.btn-reddit[disabled]:hover,
fieldset[disabled] .btn-reddit,
fieldset[disabled] .btn-reddit.active,
fieldset[disabled] .btn-reddit:active,
fieldset[disabled] .btn-reddit:focus,
fieldset[disabled] .btn-reddit:hover {
  background-color: #eff7ff;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-reddit .badge {
  color: #eff7ff;
  background-color: #000;
}

.btn-soundcloud {
  color: #fff;
  background-color: #f50;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-soundcloud.active,
.btn-soundcloud:active,
.btn-soundcloud:focus,
.btn-soundcloud:hover,
.open>.dropdown-toggle.btn-soundcloud {
  color: #fff;
  background-color: #c40;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-soundcloud.disabled,
.btn-soundcloud.disabled.active,
.btn-soundcloud.disabled:active,
.btn-soundcloud.disabled:focus,
.btn-soundcloud.disabled:hover,
.btn-soundcloud[disabled],
.btn-soundcloud[disabled].active,
.btn-soundcloud[disabled]:active,
.btn-soundcloud[disabled]:focus,
.btn-soundcloud[disabled]:hover,
fieldset[disabled] .btn-soundcloud,
fieldset[disabled] .btn-soundcloud.active,
fieldset[disabled] .btn-soundcloud:active,
fieldset[disabled] .btn-soundcloud:focus,
fieldset[disabled] .btn-soundcloud:hover {
  background-color: #f50;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-soundcloud .badge {
  color: #f50;
  background-color: #fff;
}

.btn-tumblr {
  color: #fff;
  background-color: #2c4762;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-tumblr.active,
.btn-tumblr:active,
.btn-tumblr:focus,
.btn-tumblr:hover,
.open>.dropdown-toggle.btn-tumblr {
  color: #fff;
  background-color: #1c2d3f;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-tumblr.disabled,
.btn-tumblr.disabled.active,
.btn-tumblr.disabled:active,
.btn-tumblr.disabled:focus,
.btn-tumblr.disabled:hover,
.btn-tumblr[disabled],
.btn-tumblr[disabled].active,
.btn-tumblr[disabled]:active,
.btn-tumblr[disabled]:focus,
.btn-tumblr[disabled]:hover,
fieldset[disabled] .btn-tumblr,
fieldset[disabled] .btn-tumblr.active,
fieldset[disabled] .btn-tumblr:active,
fieldset[disabled] .btn-tumblr:focus,
fieldset[disabled] .btn-tumblr:hover {
  background-color: #2c4762;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-tumblr .badge {
  color: #2c4762;
  background-color: #fff;
}

.btn-twitter {
  color: #fff;
  background-color: #55acee;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-twitter.active,
.btn-twitter:active,
.btn-twitter:focus,
.btn-twitter:hover,
.open>.dropdown-toggle.btn-twitter {
  color: #fff;
  background-color: #2795e9;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-twitter.disabled,
.btn-twitter.disabled.active,
.btn-twitter.disabled:active,
.btn-twitter.disabled:focus,
.btn-twitter.disabled:hover,
.btn-twitter[disabled],
.btn-twitter[disabled].active,
.btn-twitter[disabled]:active,
.btn-twitter[disabled]:focus,
.btn-twitter[disabled]:hover,
fieldset[disabled] .btn-twitter,
fieldset[disabled] .btn-twitter.active,
fieldset[disabled] .btn-twitter:active,
fieldset[disabled] .btn-twitter:focus,
fieldset[disabled] .btn-twitter:hover {
  background-color: #55acee;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-twitter .badge {
  color: #55acee;
  background-color: #fff;
}

.btn-vimeo {
  color: #fff;
  background-color: #1ab7ea;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-vimeo.active,
.btn-vimeo:active,
.btn-vimeo:focus,
.btn-vimeo:hover,
.open>.dropdown-toggle.btn-vimeo {
  color: #fff;
  background-color: #1295bf;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-vimeo.disabled,
.btn-vimeo.disabled.active,
.btn-vimeo.disabled:active,
.btn-vimeo.disabled:focus,
.btn-vimeo.disabled:hover,
.btn-vimeo[disabled],
.btn-vimeo[disabled].active,
.btn-vimeo[disabled]:active,
.btn-vimeo[disabled]:focus,
.btn-vimeo[disabled]:hover,
fieldset[disabled] .btn-vimeo,
fieldset[disabled] .btn-vimeo.active,
fieldset[disabled] .btn-vimeo:active,
fieldset[disabled] .btn-vimeo:focus,
fieldset[disabled] .btn-vimeo:hover {
  background-color: #1ab7ea;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-vimeo .badge {
  color: #1ab7ea;
  background-color: #fff;
}

.btn-vk {
  color: #fff;
  background-color: #587ea3;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-vk.active,
.btn-vk:active,
.btn-vk:focus,
.btn-vk:hover,
.open>.dropdown-toggle.btn-vk {
  color: #fff;
  background-color: #466482;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-vk.disabled,
.btn-vk.disabled.active,
.btn-vk.disabled:active,
.btn-vk.disabled:focus,
.btn-vk.disabled:hover,
.btn-vk[disabled],
.btn-vk[disabled].active,
.btn-vk[disabled]:active,
.btn-vk[disabled]:focus,
.btn-vk[disabled]:hover,
fieldset[disabled] .btn-vk,
fieldset[disabled] .btn-vk.active,
fieldset[disabled] .btn-vk:active,
fieldset[disabled] .btn-vk:focus,
fieldset[disabled] .btn-vk:hover {
  background-color: #587ea3;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-vk .badge {
  color: #587ea3;
  background-color: #fff;
}

.btn-wordpress {
  color: #fff;
  background-color: #21759b;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-wordpress.active,
.btn-wordpress:active,
.btn-wordpress:focus,
.btn-wordpress:hover,
.open>.dropdown-toggle.btn-wordpress {
  color: #fff;
  background-color: #12506d;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-wordpress.disabled,
.btn-wordpress.disabled.active,
.btn-wordpress.disabled:active,
.btn-wordpress.disabled:focus,
.btn-wordpress.disabled:hover,
.btn-wordpress[disabled],
.btn-wordpress[disabled].active,
.btn-wordpress[disabled]:active,
.btn-wordpress[disabled]:focus,
.btn-wordpress[disabled]:hover,
fieldset[disabled] .btn-wordpress,
fieldset[disabled] .btn-wordpress.active,
fieldset[disabled] .btn-wordpress:active,
fieldset[disabled] .btn-wordpress:focus,
fieldset[disabled] .btn-wordpress:hover {
  background-color: #21759b;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-wordpress .badge {
  color: #21759b;
  background-color: #fff;
}

.btn-whatsapp {
  color: #fff;
  background-color: #04aa24;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-whatsapp.active,
.btn-whatsapp:active,
.btn-whatsapp:focus,
.btn-whatsapp:hover,
.open>.dropdown-toggle.btn-whatsapp {
  color: #fff;
  background-color: #3c983b;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-whatsapp.disabled,
.btn-whatsapp.disabled.active,
.btn-whatsapp.disabled:active,
.btn-whatsapp.disabled:focus,
.btn-whatsapp.disabled:hover,
.btn-whatsapp[disabled],
.btn-whatsapp[disabled].active,
.btn-whatsapp[disabled]:active,
.btn-whatsapp[disabled]:focus,
.btn-whatsapp[disabled]:hover,
fieldset[disabled] .btn-whatsapp,
fieldset[disabled] .btn-whatsapp.active,
fieldset[disabled] .btn-whatsapp:active,
fieldset[disabled] .btn-whatsapp:focus,
fieldset[disabled] .btn-whatsapp:hover {
  background-color: #04aa24;
  border-color: rgba(0, 0, 0, 0.2);
}

.btn-whatsapp .badge {
  color: #04aa24;
  background-color: #fff;
}

/* -- */

/* EXTRAS */
/* ------------------------------- */

/* == margins == */
.ml0 {
  margin-left: 0 !important;
}

.mr0 {
  margin-right: 0 !important;
}

.mlr0 {
  margin-left: 0 !important;
  margin-right: 0 !important;
}

.mt0 {
  margin-top: 0 !important;
}

.mb0 {
  margin-bottom: 0 !important;
}

.mtb0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.ml5 {
  margin-left: 5px !important;
}

.mr5 {
  margin-right: 5px !important;
}

.mlr5 {
  margin-left: 5px !important;
  margin-right: 5px !important;
}

.mt5 {
  margin-top: 5px !important;
}

.mb5 {
  margin-bottom: 5px !important;
}

.mtb5 {
  margin-top: 5px !important;
  margin-bottom: 5px !important;
}

.ml10 {
  margin-left: 10px !important;
}

.mr10 {
  margin-right: 10px !important;
}

.mlr10 {
  margin-left: 10px !important;
  margin-right: 10px !important;
}

.mt10 {
  margin-top: 10px !important;
}

.mb10 {
  margin-bottom: 10px !important;
}

.mtb10 {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}

.ml15 {
  margin-left: 15px !important;
}

.mr15 {
  margin-right: 15px !important;
}

.mlr15 {
  margin-left: 15px !important;
  margin-right: 15px !important;
}

.mt15 {
  margin-top: 15px !important;
}

.mb15 {
  margin-bottom: 15px !important;
}

.mtb15 {
  margin-top: 15px !important;
  margin-bottom: 15px !important;
}

.ml20 {
  margin-left: 20px !important;
}

.mr20 {
  margin-right: 20px !important;
}

.mlr20 {
  margin-left: 20px !important;
  margin-right: 20px !important;
}

.mt20 {
  margin-top: 20px !important;
}

.mb20 {
  margin-bottom: 20px !important;
}

.mtb20 {
  margin-top: 20px !important;
  margin-bottom: 20px !important;
}

.ml25 {
  margin-left: 25px !important;
}

.mr25 {
  margin-right: 25px !important;
}

.mlr25 {
  margin-left: 25px !important;
  margin-right: 25px !important;
}

.mt25 {
  margin-top: 25px !important;
}

.mb25 {
  margin-bottom: 25px !important;
}

.mtb25 {
  margin-top: 25px !important;
  margin-bottom: 25px !important;
}

.ml30 {
  margin-left: 30px !important;
}

.mr30 {
  margin-right: 30px !important;
}

.mlr30 {
  margin-left: 30px !important;
  margin-right: 30px !important;
}

.mt30 {
  margin-top: 30px !important;
}

.mb30 {
  margin-bottom: 30px !important;
}

.mtb30 {
  margin-top: 30px !important;
  margin-bottom: 30px !important;
}

/* -- */

/* == paddings == */
.pl0 {
  padding-left: 0px !important;
}

.pr0 {
  padding-right: 0px !important;
}

.plr0 {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

.pt0 {
  padding-top: 0px !important;
}

.pb0 {
  padding-bottom: 0px !important;
}

.ptb0 {
  padding-top: 0px !important;
  padding-bottom: 0px !important;
}

.pl5 {
  padding-left: 5px !important;
}

.pr5 {
  padding-right: 5px !important;
}

.plr5 {
  padding-left: 5px !important;
  padding-right: 5px !important;
}

.pt5 {
  padding-top: 5px !important;
}

.pb5 {
  padding-bottom: 5px !important;
}

.ptb5 {
  padding-top: 5px !important;
  padding-bottom: 5px !important;
}

.pl10 {
  padding-left: 10px !important;
}

.pr10 {
  padding-right: 10px !important;
}

.plr10 {
  padding-left: 10px !important;
  padding-right: 10px !important;
}

.pt10 {
  padding-top: 10px !important;
}

.pb10 {
  padding-bottom: 10px !important;
}

.ptb10 {
  padding-top: 10px !important;
  padding-bottom: 10px !important;
}

.pl15 {
  padding-left: 15px !important;
}

.pr15 {
  padding-right: 15px !important;
}

.plr15 {
  padding-left: 15px !important;
  padding-right: 15px !important;
}

.pt15 {
  padding-top: 15px !important;
}

.pb15 {
  padding-bottom: 15px !important;
}

.ptb15 {
  padding-top: 15px !important;
  padding-bottom: 15px !important;
}

.pl20 {
  padding-left: 20px !important;
}

.pr20 {
  padding-right: 20px !important;
}

.plr20 {
  padding-left: 20px !important;
  padding-right: 20px !important;
}

.pt20 {
  padding-top: 20px !important;
}

.pb20 {
  padding-bottom: 20px !important;
}

.ptb20 {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
}

.pl25 {
  padding-left: 25px !important;
}

.pr25 {
  padding-right: 25px !important;
}

.plr25 {
  padding-left: 25px !important;
  padding-right: 25px !important;
}

.pt25 {
  padding-top: 25px !important;
}

.pb25 {
  padding-bottom: 25px !important;
}

.ptb25 {
  padding-top: 25px !important;
  padding-bottom: 25px !important;
}

.pl30 {
  padding-left: 30px !important;
}

.pr30 {
  padding-right: 30px !important;
}

.plr30 {
  padding-left: 30px !important;
  padding-right: 30px !important;
}

.pt30 {
  padding-top: 30px !important;
}

.pb30 {
  padding-bottom: 30px !important;
}

.ptb30 {
  padding-top: 30px !important;
  padding-bottom: 30px !important;
}

/* -- */

/* == text == */
.text-link {
  color: var(--link-color);
}

.text-link:hover {
  cursor: pointer;
  text-decoration: underline;
}

.text-link-no-underline {
  color: var(--link-color);
}

.text-underline:hover {
  cursor: pointer;
  text-decoration: underline;
}

.text-no-underline:hover {
  text-decoration: none !important;
}

.text-active {
  color: #1e8bd2 !important;
}

/* text sizes */
.text-sm {
  font-size: 0.8em;
  line-height: 1;
}

.text-md {
  font-size: 1.1em;
  line-height: 1.6;
}

.text-lg {
  font-size: 1.2em;
  line-height: 1.7;
}

.text-xlg {
  font-size: 1.3em;
  line-height: 1.8em;
}

.text-xxlg {
  font-size: 2.3em;
  font-weight: 700;
}

/* -- */

.text-with-list ul {
  list-style-type: disc;
  padding-inline-start: 40px;
}

.red {
  color: red;
}

.green {
  color: green;
}

.yellow {
  color: #ebba16;
}

/* -- */

/* == user-select == */
.unselectable {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* -- */

/* == cursor == */
.pointer {
  cursor: pointer;
}

/* -- */

/* == vertical-align == */
.vertical-align-top {
  vertical-align: top;
}

.vertical-align-middle {
  vertical-align: middle;
}

.vertical-align-bottom {
  vertical-align: bottom;
}

/* -- */

/* == x == */
.x-notifier {
  background: #ffffcd !important;
}

.x-hidden {
  display: none;
}

.x-blured {
  overflow: hidden;
}

.x-blured .js_lightbox,
.x-blured .album-cover {
  filter: blur(10px);
}

/* -- */

/* OFFCANVAS */
/* ------------------------------- */

@media (max-width: 767px) {
  .sg-offcanvas {
    position: relative;
    overflow: hidden;
  }

  .sg-offcanvas.active {
    transition: all 0.25s ease-out;
  }

  .sg-offcanvas .sg-offcanvas-sidebar {
    position: absolute !important;
    top: 0;
    left: -100%;
    width: 100%;
    z-index: 100;
    transition: all 0.25s ease-out;
  }

  .sg-offcanvas.active .sg-offcanvas-sidebar {
    left: 0;
  }

  .sg-offcanvas .sg-offcanvas-mainbar {
    left: 0;
    transition: all 0.25s ease-out;
  }

  .sg-offcanvas.active .sg-offcanvas-mainbar {
    left: 100%;
  }
}<?php }
}
