$.ajax({
    url: 'https://www.googleapis.com/webfonts/v1/webfonts',
    type: 'get',
    dataType: 'json',
    data: {
        'key': 'AIzaSyD_G8IzukhnkwSVgN6AsWL7xqSlXeUaYzE',
        'sort': 'STYLE'
    },
    success: function (result) {
        let res = result.items
        $.each(res, (i, data) => {
            console.log(data)
            $('.contens').append(`
                       
                        <div class="col-lg-3 font-list mt-4">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">`+ data.category + `</div>
                            <div class="card-body">
                            <h5 class="card-title"  >` + data.family + `</h5>
                        <p class="card-text" style=" font-family: '`+ data.family + `'; script=` + data.subsets + ` font-weight: 400; font-style: normal; "  >Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                    </div>
                </div>

            </div>
                `)
        })
    }
})