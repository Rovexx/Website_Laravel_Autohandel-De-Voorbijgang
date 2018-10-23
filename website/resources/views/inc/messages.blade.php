@if(count($errors) > 0)
    <!-- ->all() erbij omdat errors een object is -->
    @foreach ($errors->all() as $error)
        <script>M.toast({html: "{{ $error }}", classes: 'red'})</script>
        <script>console.log("first error")</script>
    @endforeach
@endif

@if (Session('success'))
    <script>M.toast({html: "{{ Session('success') }}", classes: 'green'})</script>
@endif

@if (Session::has('error'))
    <script>M.toast({html: "{{ Session('error') }}", classes: 'red' })</script>
@endif

<!-- logged in status -->
@if (Session::has('status'))
    <script>M.toast({html: "{{ Session('status') }}", classes: 'green' })</script>
@endif
