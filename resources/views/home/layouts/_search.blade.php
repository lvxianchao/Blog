<!-- 搜索遮罩框 -->
<div id="searchModal" class="modal">
    <div class="modal-content">
        <div class="search-header">
            <span class="title"><i class="fa fa-search"></i>&nbsp;&nbsp;搜索</span>
            <input type="search" id="searchInput" name="s" placeholder="请输入搜索的关键字" class="search-input" autofocus>
        </div>
        <div id="searchResult"></div>
    </div>
</div>

<script src="{{ asset('js/search.js') }}"></script>
<script type="text/javascript">
    searchFunc("/" + "search.xml", 'searchInput', 'searchResult');
</script>
