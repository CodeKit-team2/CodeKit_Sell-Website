<div class="p-5 mb:flex mb:w-7/12 md:hidden mb:justify-end">
    <button  type="button" onclick="handleClick()">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>
</div>

<script>
    function handleClick() {
        document.getElementById("dropdown").classList.toggle("mb:hidden")
    }    
</script>