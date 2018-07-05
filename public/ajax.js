let page = 1;
/*function show() {
    $.ajax({
        type: "POST",
        url: "../show.php",
        data: {page: page},
        success: function(html){
        $("#content").append(html);
        page++;
        }
    });
}*/

function show() {
    $.ajax({
        type: "POST",
        url: "../show.php",
        data: {page: page},
        success: function (html) {
            render('content',html);
            /*$('#content').append(html);*/
            page++;
        }
    });
}
function render(container_id, content) {
    content = JSON.parse(content);
for (let i = 0; i < content.length; i++) {
        let container = document.createElement("div");
        let subcontainer = document.createElement("div");
        let image = document.createElement("img");
        let title = document.createElement("h5");
        let description = document.createElement("p");
        let price = document.createElement("h5");
        let b = document.createElement("b");
        price.classList = "good__item_price";
        b.textContent = content[i].price;
        price.appendChild(b);
        description.classList = "good__item_title";
        description.textContent = content[i].description;
        title.classList = "good__item_title";
        title.textContent = content[i].title;
        subcontainer.classList = "good__item_block";
        container.classList = 'good__item col-lg-4 col-md-6 col-sm-12 col-xs-12';
        image.setAttribute("src",content[i].image);
        subcontainer.appendChild(image);
        subcontainer.appendChild(title);
        subcontainer.appendChild(description);
        subcontainer.appendChild(price);
        container.appendChild(subcontainer);
        document.getElementById(container_id).appendChild(container);
    }
}
