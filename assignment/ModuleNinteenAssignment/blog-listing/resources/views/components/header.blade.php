<header class="masthead" style="background-image: {{ url('https://picsum.photos/1900/1267') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1 id="keyLine">Clean Blog</h1>
                    <span class="subheading" id = "subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    getHero();
    async function getHero() {
 
        try {
            let URL="/heroData"
 
            
 
            let response = await axios.get(URL);
            document.getElementById('keyLine').innerHTML=response.data['title'];
            document.getElementById('subheading').innerHTML=response.data['shortTitle'];
        }
        catch (e) {
            alert(e);
        }
 
    }
 
 </script>