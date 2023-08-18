<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
 <script>
   tinymce.init({
     selector: 'textarea#blog_editor', // Replace this CSS selector to match the placeholder element for TinyMCE
     plugins: 'code table lists | image | wordcount',
     toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image | wordcount',
    });
 </script>
