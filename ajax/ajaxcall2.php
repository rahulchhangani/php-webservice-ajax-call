<html>
<script type="text/javascript" src="js/jquery-1.3.2.js"> </script>
<script type="text/javascript">
 $(document).ready(function () {
   $.ajax({
    type: 'GET',
    url: 'https://...url..../ajaxcall.php?id2=xyz&submit=2',    //here id is quiz id and using this you will get return
    data: { get_param: 'value' },
    dataType: 'json',
    success: function (data) {
        $.each(data, function(index, element) {
          alert(element.id+","+element.maxmarks+","+element.obtmarks);
          /*use element array as required
           */
        });
    }
});
});
</script>
</html>
