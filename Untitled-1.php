<form class="list-group-item" method="get" action="search.php" name="search" >
    <input  name="item" value="<%=1%>">
    <input type="text">
    <input type="submit">
</form>

<script>
$(function(ev){
    ev.preventDefault();

    $("form:[name='search']").on("submit", function(){
        var form = $(this);
        var data = form.serialize();
        var action = form.attr("action");

        $.get(action, data)
        window.location.replace("http://stackoverflow.com");
    });
});
</script>