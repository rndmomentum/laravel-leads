<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<style>
    #bulk-upload
    {
        width: 100%;
        border: 1px dashed #5e72e4;
        border-radius: 25px;
        color: #5e72e4;
    }
</style>
<form action="{{ url()->full() }}" class="dropzone" id="bulk-upload" accept=".xls,.xlsx"></form>
<a href="{{ route('laravel-lead.download.bulk-update.template')}}">Download Bulk Upload Template</a>
