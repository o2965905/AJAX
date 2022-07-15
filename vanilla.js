function eventList(events){
    // console.log(res);
    let title=document.querySelector(".title");
    title.innerHTML=events.title;

    let ul=document.querySelector('ul');
    let li='';
    let entrys=events.entry;
    for(let i=0;i<entrys.length;i++){
        li=li+`
            <li class="card-deck  col-md-6 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/id/112/200/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-success text-truncate">${entrys[i].title}</h5>
                            <hr>
                            <p class="card-text text-danger text-truncate">${entrys[i].author.name}</p>    
                            <p class="card-text text-secondary text-truncate">${entrys[i].summary}</p>
                            <button type="button" class="btn btn-info">延伸閱讀</button>    
                        </div>
                </div>
            </li>`;
    }
    ul.innerHTML=li;
}