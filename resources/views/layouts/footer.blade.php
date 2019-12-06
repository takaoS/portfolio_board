@section('footer')
<footer class="mt-3 py-2 bg-light">
    <p class="text-center text-muted">©2019 Takao Sekiguchi</p>
    <div class="twitter">
        {{-- target="_blank" の脆弱性への対処として、rel="noopener noreferrer" を追加する --}}
        <a href="https://twitter.com/takao_se" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-twitter-square fa-3x text-primary"></i></a></div>
    <div class="github">
        <a href="https://github.com/takaoS/portfolio_board" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-github-square fa-3x text-secondary"></i></a></div>
    <div class="blog rounded-lg bg-secondary p-1">
        <a href="https://takaolab.com/" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-wordpress fa-2x text-white"></i></a></div>
    <div class="page-top rounded-lg bg-secondary px-2">
        <a href="#">
            <i class="fas fa-angle-up fa-2x text-white"></i></a></div>
</footer>
@endsection
