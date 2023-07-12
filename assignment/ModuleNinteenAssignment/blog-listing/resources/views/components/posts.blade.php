<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview" id = "post-preview">
                
            <!-- Divider-->
            {{-- <hr class="my-4" /> --}}

           
        </div>
    </div>
</div>

<script>
    postList();
    async function postList() {
        try{
            let URL="/postData";
            let response = await axios.get(URL);
            response.data.forEach((item)=>{
                document.getElementById('post-preview').innerHTML+=(`
                <a href="/post/${item['id']}">
                    <h2 class="post-title">${item['postTitle']}</h2>
                    <h3 class="post-subtitle">${item['postExcerpt']}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="">${item['author']}</a>
                    on ${item['created_at']}
                </p>
            </div>     
                `)
            })
        }
        catch (e) {
            alert(e)
        }
    }
    async function showPost(id) {
        try {
            let URL = `/post/${id}`;
            let response = await axios.get(URL);
            let post = response.data;
            let postPreview = document.getElementById('post-preview');
            postPreview.innerHTML = `
                <h2 class="post-title">${post['postTitle']}</h2>
                <h4 class="post-subtitle">${post['postExcerpt']}</h4>
                <p class="post-meta">
                    Posted by
                    <a href="">${post['author']}</a>
                </p>
                <p>${post['postDetails']}</p>
                
            `;
        } catch (e) {
            alert(e);
        }
    }


 
 </script>