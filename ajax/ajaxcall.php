<html>
<script type="text/javascript" src="js/jquery-1.3.2.js"> </script>
<script type="text/javascript">
 $(document).ready(function () {
   $.ajax({
    type: 'GET',
    url: 'https://...url..../ajaxcall.php?id=xyz&submit=1',
    data: { get_param: 'value' },
    dataType: 'json',
    success: function (data) {
        $.each(data, function(index, element) {
          alert(element.id+","+element.val+","+element.maxmarks+","+element.totalstudents);
          // use element details as required
        });
    }
});
});
</script>
</html>
