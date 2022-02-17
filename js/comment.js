const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get('id');
const base_url = document.body.dataset.baseurl;
const commentsDiv = document.getElementById("comments");
const textarea = document.getElementById("comment-text");
const addComment = document.getElementById("add-comment");

function getComments() {
    axios.get(base_url + "/api/comment/list.php?id=" + id).then(res => {
        showComments(res.data);
    })
}

function showComments(comments) {
    let commentsHTML = `<h2>${comments.length} комментов</h2>`;
    
    for(let i = 0; i < comments.length; i++) {
        commentsHTML += `
        <div class="comment">
            <div class="comment-header">
                <div>
                    <img src="${base_url}/images/avatar.png" alt="">
                    ${comments[i].full_name}
                </div>
                <span> Удалить </span>
            </div>
            <p>
                ${comments[i].text}
            </p>
        </div>
        `;
    }

    commentsDiv.innerHTML = commentsHTML;

}

getComments();




addComment.onclick = function() {

    axios.post(base_url + "/api/comment/add.php", {
        text: textarea.value,
        blog_id: id
    }).then(res=> {
        commentsDiv.innerHTML += `
        <div class="comment">
            <div class="comment-header">
                <img src="${base_url}/images/avatar.png" alt="">
                ${res.data.full_name}
            </div>
            <p>
                ${res.data.text}
            </p>
        </div>
        `;

        textarea.value = "";
        
    })
}

