<!-- component -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="resources\css\app.css">

    <title>PT. Smart Sales Team</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

/*
! tailwindcss v3.3.3 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

.btn-simpan {
    display: inline-block !important;
    font-size: 0.875rem !important; /* text-sm */
    padding: 0.75rem 1.5rem !important; /* px-6 py-3 */
    font-weight: 600 !important; /* font-semibold */
    border-radius: 0.375rem !important; /* rounded-md */
    transition: all 0.2s ease-in-out !important;
    outline: none !important;
    background-color: #3085d6!important;
    color: white !important;
}

.btn-simpan:hover {
    background-color: #134471!important;
}

.btn-swal-confirm {
    background-color: #16a34a !important;
    color: white !important;
    font-weight: 600 !important;
    padding: 0.6rem 1.5rem !important;
    border-radius: 0.5rem !important;
    border: none !important;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
    transition: background-color 0.2s ease !important;
    margin: 0 0.25rem !important;
}

.btn-swal-confirm:hover {
    background-color: #15803d !important;
}

.btn-swal-reject {
    background-color: #dc2626 !important;
    color: white !important;
    font-weight: 600 !important;
    padding: 0.6rem 1.5rem !important;
    border-radius: 0.5rem !important;
    border: none !important;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
    transition: background-color 0.2s ease !important;
    margin: 0 0.25rem !important;
}

.btn-swal-reject:hover {
    background-color: #b91c1c !important;
}

.btn-swal-cancel {
    background-color: #6b7280 !important;
    color: white !important;
    font-weight: 600 !important;
    padding: 0.6rem 1.5rem !important;
    border-radius: 0.5rem !important;
    border: none !important;
    margin: 0 0.25rem !important;
    transition: background-color 0.2s ease !important;
}

.btn-swal-cancel:hover {
    background-color: #4b5563 !important;
}

.btn-end-subscription {
    display: inline-block !important;
    font-size: 0.875rem !important; /* text-sm */
    padding: 0.75rem 1.5rem !important; /* px-6 py-3 */
    font-weight: 600 !important; /* font-semibold */
    border-radius: 0.375rem !important; /* rounded-md */
    transition: all 0.2s ease-in-out !important;
    outline: none !important;
    background-color: #cf1313!important; 
    color: white !important;
}

.btn-end-subscription:hover {
    display: inline-block !important;
    font-size: 0.875rem !important; /* text-sm */
    padding: 0.75rem 1.5rem !important; /* px-6 py-3 */
    font-weight: 600 !important; /* font-semibold */
    border-radius: 0.375rem !important; /* rounded-md */
    transition: all 0.2s ease-in-out !important;
    outline: none !important;
    background-color: #9f1313!important; 
    color: white !important;
}

/* Tombol Setujui (Approved) */
.btn-approve {
    display: inline-block !important;
    font-size: 0.875rem !important; /* text-sm */
    padding: 0.75rem 1.5rem !important; /* px-6 py-3 */
    font-weight: 600 !important; /* font-semibold */
    border-radius: 0.375rem !important; /* rounded-md */
    transition: all 0.2s ease-in-out !important;
    outline: none !important;
    background-color: #16a34a!important; /* bg-green-600 */
    color: white !important;
}


.btn-approve:hover {
    background-color: #15803d !important; /* bg-green-700 */
    transform: scale(1.05) !important;
}

.btn-approve:focus {
    box-shadow: 0 0 0 2px #4ade80 !important; /* focus:ring-green-400 */
}

/* Tombol Tolak (Rejected) */
.btn-reject {
    display: inline-block !important;
    font-size: 0.875rem !important; /* text-sm */
    padding: 0.75rem 1.5rem !important; /* px-6 py-3 */
    margin-left: 0.5rem !important;
    font-weight: 600 !important; /* font-semibold */
    border-radius: 0.375rem !important; /* rounded-md */
    transition: all 0.2s ease-in-out !important; 
    outline: none !important;
    background-color: #dc2626 !important; /* bg-red-600 */
    color: white !important;
}

.btn-reject:hover {
    background-color: #b91c1c !important; /* bg-red-700 */
    transform: scale(1.05) !important;
}

.btn-reject:focus {
    box-shadow: 0 0 0 2px #f87171 !important; /* focus:ring-red-400 */
}


.my-link {
    color: #3085d6; /* Warna teks biru */
    font-weight: 600; /* Font tebal */
    padding: 5px 10px; /* Padding kiri-kanan dan atas-bawah */
    border-radius: 0.375rem; /* Membulatkan sudut */
    text-decoration: none; /* Menghilangkan garis bawah */
    transition: background-color 0.3s ease, color 0.3s ease; /* Transisi halus saat hover */
}

.my-link:hover {
    background-color: #3085d6; /* Background biru saat hover */
    color: #ffffff; /* Warna teks putih saat hover */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan untuk efek hover */
}


.my-confirm-button {
    background-color: #3085d6 !important; /* Warna latar belakang */
    color: white !important; /* Warna teks */
    font-weight: 600 !important; /* Font semibold */
    padding: 0.75rem 1.5rem !important; /* Padding kiri-kanan dan atas-bawah */
    border-radius: 0.375rem !important; /* Membuat sudut tombol membulat */
    transition: background-color 0.2s ease !important; /* Transisi saat hover */
}

.my-confirm-button:hover {
    background-color: #2563eb !important; /* Warna latar belakang saat hover */
}

/* Styling tombol batal */
.my-cancel-button {
    background-color: #d33 !important; /* Warna latar belakang */
    color: white !important; /* Warna teks */
    font-weight: 600 !important; /* Font semibold */
    padding: 0.75rem 1.5rem !important; /* Padding kiri-kanan dan atas-bawah */
    border-radius: 0.375rem !important; /* Membuat sudut tombol membulat */
    transition: background-color 0.2s ease !important; /* Transisi saat hover */
}

.my-cancel-button:hover {
    background-color: #c1302b !important; /* Warna latar belakang saat hover */
}


*,
::before,
::after {
  box-sizing: border-box;
  /* 1 */
  border-width: 0;
  /* 2 */
  border-style: solid;
  /* 2 */
  border-color: #e5e7eb;
  /* 2 */
}

::before,
::after {
  --tw-content: '';
}

html {
  line-height: 1.5;
  /* 1 */
  -webkit-text-size-adjust: 100%;
  /* 2 */
  -moz-tab-size: 4;
  /* 3 */
  -o-tab-size: 4;
     tab-size: 4;
  /* 3 */
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  /* 4 */
  font-feature-settings: normal;
  /* 5 */
  font-variation-settings: normal;
  /* 6 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0;
  /* 1 */
  line-height: inherit;
  /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0;
  /* 1 */
  color: inherit;
  /* 2 */
  border-top-width: 1px;
  /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  /* 1 */
  font-size: 1em;
  /* 2 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0;
  /* 1 */
  border-color: inherit;
  /* 2 */
  border-collapse: collapse;
  /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit;
  /* 1 */
  font-feature-settings: inherit;
  /* 1 */
  font-variation-settings: inherit;
  /* 1 */
  font-size: 100%;
  /* 1 */
  font-weight: inherit;
  /* 1 */
  line-height: inherit;
  /* 1 */
  color: inherit;
  /* 1 */
  margin: 0;
  /* 2 */
  padding: 0;
  /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
  /* 1 */
  background-color: transparent;
  /* 2 */
  background-image: none;
  /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield;
  /* 1 */
  outline-offset: -2px;
  /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button;
  /* 1 */
  font: inherit;
  /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1;
  /* 1 */
  color: #9ca3af;
  /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block;
  /* 1 */
  vertical-align: middle;
  /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden] {
  display: none;
}

*, ::before, ::after{
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop{
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

.fixed{
  position: fixed;
}

.absolute{
  position: absolute;
}

.relative{
  position: relative;
}

.sticky{
  position: sticky;
}

.left-0{
  left: 0px;
}

.left-4{
  left: 1rem;
}

.top-0{
  top: 0px;
}

.top-1\/2{
  top: 50%;
}

.z-30{
  z-index: 30;
}

.z-40{
  z-index: 40;
}

.z-50{
  z-index: 50;
}

.my-2{
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
}

.-ml-3{
  margin-left: -0.75rem;
}

.mb-0{
  margin-bottom: 0px;
}

.mb-0\.5{
  margin-bottom: 0.125rem;
}

.mb-1{
  margin-bottom: 0.25rem;
}

.mb-2{
  margin-bottom: 0.5rem;
}

.mb-4{
  margin-bottom: 1rem;
}

.mb-6{
  margin-bottom: 1.5rem;
}

.ml-1{
  margin-left: 0.25rem;
}

.ml-2{
  margin-left: 0.5rem;
}

.ml-3{
  margin-left: 0.75rem;
}

.ml-4{
  margin-left: 1rem;
}

.ml-auto{
  margin-left: auto;
}

.mr-1{
  margin-right: 0.25rem;
}

.mr-2{
  margin-right: 0.5rem;
}

.mr-3{
  margin-right: 0.75rem;
}

.mr-4{
  margin-right: 1rem;
}

.mt-2{
  margin-top: 0.5rem;
}

.mt-3{
  margin-top: 0.75rem;
}

.mt-4{
  margin-top: 1rem;
}

.block{
  display: block;
}

.inline-block{
  display: inline-block;
}

.flex{
  display: flex;
}

.table{
  display: table;
}

.grid{
  display: grid;
}

.hidden{
  display: none;
}

.h-2{
  height: 0.5rem;
}

.h-4{
  height: 1rem;
}

.h-6{
  height: 1.5rem;
}

.h-8{
  height: 2rem;
}

.h-full{
  height: 100%;
}

.max-h-64{
  max-height: 16rem;
}

.min-h-screen{
  min-height: 100vh;
}

.w-2{
  width: 0.5rem;
}

.w-6{
  width: 1.5rem;
}

.w-64{
  width: 16rem;
}

.w-8{
  width: 2rem;
}

.w-full{
  width: 100%;
}

.min-w-\[460px\]{
  min-width: 460px;
}

.min-w-\[540px\]{
  min-width: 540px;
}

.max-w-\[140px\]{
  max-width: 140px;
}

.max-w-xs{
  max-width: 20rem;
}

.-translate-x-full{
  --tw-translate-x: -100%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-1\/2{
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.appearance-none{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}

.grid-cols-1{
  grid-template-columns: repeat(1, minmax(0, 1fr));
}

.items-start{
  align-items: flex-start;
}

.items-center{
  align-items: center;
}

.justify-center{
  justify-content: center;
}

.justify-between{
  justify-content: space-between;
}

.gap-4{
  gap: 1rem;
}

.gap-6{
  gap: 1.5rem;
}

.overflow-x-auto{
  overflow-x: auto;
}

.overflow-y-auto{
  overflow-y: auto;
}

.truncate{
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.rounded{
  border-radius: 0.25rem;
}

.rounded-full{
  border-radius: 9999px;
}

.rounded-md{
  border-radius: 0.375rem;
}

.rounded-bl-md{
  border-bottom-left-radius: 0.375rem;
}

.rounded-br-md{
  border-bottom-right-radius: 0.375rem;
}

.rounded-tl-md{
  border-top-left-radius: 0.375rem;
}

.rounded-tr-md{
  border-top-right-radius: 0.375rem;
}

.border{
  border-width: 1px;
}

.border-b{
  border-bottom-width: 1px;
}

.border-b-2{
  border-bottom-width: 2px;
}

.border-dashed{
  border-style: dashed;
}

.border-gray-100{
  --tw-border-opacity: 1;
  border-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.border-gray-200{
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
}

.border-b-gray-100{
  --tw-border-opacity: 1;
  border-bottom-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.border-b-gray-50{
  --tw-border-opacity: 1;
  border-bottom-color: rgb(249 250 251 / var(--tw-border-opacity));
}

.border-b-gray-800{
  --tw-border-opacity: 1;
  border-bottom-color: rgb(31 41 55 / var(--tw-border-opacity));
}

.border-b-transparent{
  border-bottom-color: transparent;
}

.bg-black\/50{
  background-color: rgb(0 0 0 / 0.5);
}

.bg-blue-500{
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}

.bg-blue-500\/10{
  background-color: rgb(59 130 246 / 0.1);
}

.bg-emerald-500\/10{
  background-color: rgb(16 185 129 / 0.1);
}

.bg-gray-100{
  --tw-bg-opacity: 1;
  background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-gray-50{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.bg-gray-900{
  --tw-bg-opacity: 1;
  background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}

.bg-rose-500\/10{
  background-color: rgb(244 63 94 / 0.1);
}

.bg-white{
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-select-arrow{
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZD0iTTExLjk5OTcgMTMuMTcxNEwxNi45NDk1IDguMjIxNjhMMTguMzYzNyA5LjYzNTg5TDExLjk5OTcgMTUuOTk5OUw1LjYzNTc0IDkuNjM1ODlMNy4wNDk5NiA4LjIyMTY4TDExLjk5OTcgMTMuMTcxNFoiIGZpbGw9InJnYmEoMTU2LDE2MywxNzUsMSkiPjwvcGF0aD48L3N2Zz4=");
}

.bg-\[length\:16px_16px\]{
  background-size: 16px 16px;
}

.bg-\[right_16px_center\]{
  background-position: right 16px center;
}

.bg-no-repeat{
  background-repeat: no-repeat;
}

.object-cover{
  -o-object-fit: cover;
     object-fit: cover;
}

.p-1{
  padding: 0.25rem;
}

.p-4{
  padding: 1rem;
}

.p-6{
  padding: 1.5rem;
}

.px-4{
  padding-left: 1rem;
  padding-right: 1rem;
}

.px-6{
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}

.py-1{
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.py-1\.5{
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
}

.py-2{
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.pb-1{
  padding-bottom: 0.25rem;
}

.pb-4{
  padding-bottom: 1rem;
}

.pl-10{
  padding-left: 2.5rem;
}

.pl-4{
  padding-left: 1rem;
}

.pl-7{
  padding-left: 1.75rem;
}

.pr-10{
  padding-right: 2.5rem;
}

.pr-4{
  padding-right: 1rem;
}

.pt-4{
  padding-top: 1rem;
}

.text-left{
  text-align: left;
}

.align-top{
  vertical-align: top;
}

.align-middle{
  vertical-align: middle;
}

.font-inter{
  font-family: 'Inter', sans-serif;
}

.text-2xl{
  font-size: 1.5rem;
  line-height: 2rem;
}

.text-\[11px\]{
  font-size: 11px;
}

.text-\[12px\]{
  font-size: 12px;
}

.text-\[13px\]{
  font-size: 13px;
}

.text-base{
  font-size: 1rem;
  line-height: 1.5rem;
}

.text-lg{
  font-size: 1.125rem;
  line-height: 1.75rem;
}

.text-sm{
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.text-xl{
  font-size: 1.25rem;
  line-height: 1.75rem;
}

.font-bold{
  font-weight: 700;
}

.font-medium{
  font-weight: 500;
}

.font-normal{
  font-weight: 400;
}

.font-semibold{
  font-weight: 600;
}

.uppercase{
  text-transform: uppercase;
}

.leading-none{
  line-height: 1;
}

.tracking-wide{
  letter-spacing: 0.025em;
}

.text-blue-500{
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.text-emerald-500{
  --tw-text-opacity: 1;
  color: rgb(16 185 129 / var(--tw-text-opacity));
}

.text-gray-300{
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

.text-gray-400{
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.text-gray-600{
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.text-gray-800{
  --tw-text-opacity: 1;
  color: rgb(31 41 55 / var(--tw-text-opacity));
}

.text-rose-500{
  --tw-text-opacity: 1;
  color: rgb(244 63 94 / var(--tw-text-opacity));
}

.text-white{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.shadow-md{
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.shadow-black\/10{
  --tw-shadow-color: rgb(0 0 0 / 0.1);
  --tw-shadow: var(--tw-shadow-colored);
}

.shadow-black\/5{
  --tw-shadow-color: rgb(0 0 0 / 0.05);
  --tw-shadow: var(--tw-shadow-colored);
}

.outline-none{
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.transition-all{
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.transition-transform{
  transition-property: transform;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}

.notification-tab > .active{
  --tw-border-opacity: 1;
  border-bottom-color: rgb(59 130 246 / var(--tw-border-opacity));
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.notification-tab > .active:hover{
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.order-tab > .active{
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.order-tab > .active:hover{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

@media (min-width: 768px){
  .main.active{
    margin-left: 0px;
    width: 100%;
  }
}

.before\:mr-3::before{
  content: var(--tw-content);
  margin-right: 0.75rem;
}

.before\:h-1::before{
  content: var(--tw-content);
  height: 0.25rem;
}

.before\:w-1::before{
  content: var(--tw-content);
  width: 0.25rem;
}

.before\:rounded-full::before{
  content: var(--tw-content);
  border-radius: 9999px;
}

.before\:bg-gray-300::before{
  content: var(--tw-content);
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
}

.hover\:bg-gray-50:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.hover\:bg-gray-950:hover{
  --tw-bg-opacity: 1;
  background-color: rgb(3 7 18 / var(--tw-bg-opacity));
}

.hover\:text-blue-500:hover{
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.hover\:text-blue-600:hover{
  --tw-text-opacity: 1;
  color: rgb(37 99 235 / var(--tw-text-opacity));
}

.hover\:text-gray-100:hover{
  --tw-text-opacity: 1;
  color: rgb(243 244 246 / var(--tw-text-opacity));
}

.hover\:text-gray-600:hover{
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.focus\:border-blue-500:focus{
  --tw-border-opacity: 1;
  border-color: rgb(59 130 246 / var(--tw-border-opacity));
}

.group:hover .group-hover\:text-blue-500{
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}

.group.selected .group-\[\.selected\]\:block{
  display: block;
}

.group.selected .group-\[\.selected\]\:rotate-90{
  --tw-rotate: 90deg;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.group.active .group-\[\.active\]\:bg-gray-800{
  --tw-bg-opacity: 1;
  background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}

.group.selected .group-\[\.selected\]\:bg-gray-950{
  --tw-bg-opacity: 1;
  background-color: rgb(3 7 18 / var(--tw-bg-opacity));
}

.group.active .group-\[\.active\]\:text-white{
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.group.selected .group-\[\.selected\]\:text-gray-100{
  --tw-text-opacity: 1;
  color: rgb(243 244 246 / var(--tw-text-opacity));
}

@media (min-width: 768px){
  .md\:ml-64{
    margin-left: 16rem;
  }

  .md\:hidden{
    display: none;
  }

  .md\:w-\[calc\(100\%-256px\)\]{
    width: calc(100% - 256px);
  }

  .md\:grid-cols-2{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (min-width: 1024px){
  .lg\:col-span-2{
    grid-column: span 2 / span 2;
  }

  .lg\:grid-cols-2{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .lg\:grid-cols-3{
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
}
    </style>
</head>
<body class="text-gray-800 font-inter">
    <!-- sidenav -->
    <div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform flex flex-col justify-between">
      <div>
          <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
              <h2 class="font-bold text-2xl">PT. <span class="bg-[#f84525] text-white px-2 rounded-md">SMART</span></h2>
          </a>
          <ul class="mt-4">
              <span class="text-gray-400 font-bold">SALES TEAM</span>

              <li class="mb-1 group">
                  <a href="/leads" class="flex font-semibold items-center py-3 my-3 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                      <i class="ri-user-follow-line mr-3 text-lg"></i>
                      <span class="text-sm">All Leads</span>
                  </a>
              </li>

              @cannot('manager')
              <li class="mb-1 group">
                  <a href="/products" class="flex font-semibold items-center py-3 my-3 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                      <i class='ri-shopping-bag-3-line mr-3 text-lg'></i>
                      <span class="text-sm">All Products</span>
                  </a>
              </li>
              @endcannot
              

              @can('manager')
                <span class="text-gray-400 font-bold">MANAGER</span>

                <li class="mb-1 group">
                    <a href="/projects" class="flex font-semibold items-center py-3 my-3 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class='ri-folder-2-line mr-3 text-lg'></i>
                        <span class="text-sm">Projects</span>
                    </a>
                </li>

                <li class="mb-1 group">
                    <a href="/subscriptions" class="flex font-semibold items-center py-3 my-3 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class='ri-user-shared-2-line mr-3 text-lg'></i>
                        <span class="text-sm">Customer's Subscriptions</span>
                    </a>
                </li>

                <li class="mb-1 group">
                  <a href="/products" class="flex font-semibold items-center py-3 my-3 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                      <i class='ri-shopping-bag-3-line mr-3 text-lg'></i>
                      <span class="text-sm">Manage Products</span>
                  </a>
              </li>
              @endcan
              


          </ul>
      </div>

     
       <!-- Tombol Logout -->
       <form id="logout-form" method="POST" action="{{ route('logout') }}">
        @csrf
        <li class="mb-1 group py-5 list-none">
            <button 
                type="button" 
                onclick="confirmLogout()" 
                class="w-full h-13 flex font-semibold items-center my-3 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md transition-colors duration-200 group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"
            >
                <i class="ri-logout-box-r-line mr-3 text-lg"></i>
                <span class="text-md">Logout</span>
            </button>
        </li>
      </form>
    
    </div>

    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end sidenav -->

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-dvh pb-6 transition-all main">
        <!-- navbar -->
        <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>

            <ul class="ml-auto flex items-center">
                
                
                <button id="fullscreen-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="hover:bg-gray-100 rounded-full" viewBox="0 0 24 24" style="fill: gray;transform: ;msFilter:;"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"></path></svg>
                </button>
                <script>
                    const fullscreenButton = document.getElementById('fullscreen-button');
                
                    fullscreenButton.addEventListener('click', toggleFullscreen);
                
                    function toggleFullscreen() {
                        if (document.fullscreenElement) {
                            // If already in fullscreen, exit fullscreen
                            document.exitFullscreen();
                        } else {
                            // If not in fullscreen, request fullscreen
                            document.documentElement.requestFullscreen();
                        }
                    }
                </script>

                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="w-8 h-8 rounded-full" src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg" alt=""/>
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping"></div>
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full"></div>
                            </div>
                        </div>

                        @auth
                        <div class="p-2 md:block text-left">
                          <h2 class="text-sm font-semibold text-gray-800">
                              {{ Auth::user()->name }}
                          </h2>
                          <p class="text-xs text-gray-500">
                              {{ Auth::user()->is_manager ? 'Manager' : 'Sales Team' }}
                          </p>
                      </div>
                      @endauth

                    </button>
                    
                </li>
            </ul>
        </div>
        <!-- end navbar -->

      <!-- Content -->
        <div class="px-8">
            @yield('container')
        </div>
      <!-- End Content -->
    </main>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // start: Sidebar
        const sidebarToggle = document.querySelector('.sidebar-toggle')
        const sidebarOverlay = document.querySelector('.sidebar-overlay')
        const sidebarMenu = document.querySelector('.sidebar-menu')
        const main = document.querySelector('.main')
        sidebarToggle.addEventListener('click', function (e) {
            e.preventDefault()
            main.classList.toggle('active')
            sidebarOverlay.classList.toggle('hidden')
            sidebarMenu.classList.toggle('-translate-x-full')
        })
        sidebarOverlay.addEventListener('click', function (e) {
            e.preventDefault()
            main.classList.add('active')
            sidebarOverlay.classList.add('hidden')
            sidebarMenu.classList.add('-translate-x-full')
        })
        document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (item) {
            item.addEventListener('click', function (e) {
                e.preventDefault()
                const parent = item.closest('.group')
                if (parent.classList.contains('selected')) {
                    parent.classList.remove('selected')
                } else {
                    document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (i) {
                        i.closest('.group').classList.remove('selected')
                    })
                    parent.classList.add('selected')
                }
            })
        })
        // end: Sidebar



        // start: Popper
        const popperInstance = {}
        document.querySelectorAll('.dropdown').forEach(function (item, index) {
            const popperId = 'popper-' + index
            const toggle = item.querySelector('.dropdown-toggle')
            const menu = item.querySelector('.dropdown-menu')
            menu.dataset.popperId = popperId
            popperInstance[popperId] = Popper.createPopper(toggle, menu, {
                modifiers: [
                    {
                        name: 'offset',
                        options: {
                            offset: [0, 8],
                        },
                    },
                    {
                        name: 'preventOverflow',
                        options: {
                            padding: 24,
                        },
                    },
                ],
                placement: 'bottom-end'
            });
        })
        document.addEventListener('click', function (e) {
            const toggle = e.target.closest('.dropdown-toggle')
            const menu = e.target.closest('.dropdown-menu')
            if (toggle) {
                const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
                const popperId = menuEl.dataset.popperId
                if (menuEl.classList.contains('hidden')) {
                    hideDropdown()
                    menuEl.classList.remove('hidden')
                    showPopper(popperId)
                } else {
                    menuEl.classList.add('hidden')
                    hidePopper(popperId)
                }
            } else if (!menu) {
                hideDropdown()
            }
        })

        function hideDropdown() {
            document.querySelectorAll('.dropdown-menu').forEach(function (item) {
                item.classList.add('hidden')
            })
        }
        function showPopper(popperId) {
            popperInstance[popperId].setOptions(function (options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        { name: 'eventListeners', enabled: true },
                    ],
                }
            });
            popperInstance[popperId].update();
        }
        function hidePopper(popperId) {
            popperInstance[popperId].setOptions(function (options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        { name: 'eventListeners', enabled: false },
                    ],
                }
            });
        }
        // end: Popper



        // start: Tab
        document.querySelectorAll('[data-tab]').forEach(function (item) {
            item.addEventListener('click', function (e) {
                e.preventDefault()
                const tab = item.dataset.tab
                const page = item.dataset.tabPage
                const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page + '"]')
                document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function (i) {
                    i.classList.remove('active')
                })
                document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function (i) {
                    i.classList.add('hidden')
                })
                item.classList.add('active')
                target.classList.remove('hidden')
            })
        })
        // end: Tab


        
    </script>

     <!-- Flowbite Script -->
     <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
     {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
 
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
      function confirmLogout() {
          Swal.fire({
              title: 'Logout?',
              text: "Do you want to Logout?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, Logout!',
              cancelButtonText: 'No',
              customClass: {
                  confirmButton: 'my-confirm-button',  // Menambahkan class custom untuk tombol konfirmasi
                  cancelButton: 'my-cancel-button'   // Menambahkan class custom untuk tombol batal
              }
          }).then((result) => {
              if (result.isConfirmed) {
                  // Jika pengguna mengkonfirmasi logout, kirimkan form
                  document.getElementById('logout-form').submit(); // Mengakses form dengan ID 'logout-form' dan submit form tersebut
              }
          });
      }
  </script>
  

</body>
</html>