@if($announcement)
<dialog id="anouncment"  class="announcment">
<div class="text">
<div class="icon">
@include('partials.icons.exclamation')
</div>
<h2>Important Announcement</h2>
<p>{{ $announcement->announcement }}</p>
</div>
<div class="action">
<button type="button" onclick="document.getElementById('anouncment').close()">Close</button>
</div>
</dialog>
<script>

 document.getElementById('anouncment').showModal();
   

</script>
@endif