<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Comments</p>
                <div class="my-5">
                   
                    <form id="commentsForm" >
                        <div class="form-floating">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <input type="hidden" id="blog_id" name="blog_id" value=2>
                        
                        <div class="form-floating">
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <br />
                        <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


<script>

    let contactForm=document.getElementById('contactForm')
    contactForm.addEventListener('submit',async (event) => {
        event.preventDefault();
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let msg = document.getElementById('message').value;
        let blog_id = document.getElementById('blog_id').value ;
  
        if (name.length === 0) {
            alert('Name is required')
        } else if (email.length === 0) {
            alert('Email is required')
        } else if (phone.length === 0) {
            alert('Phone is required')
        } else {
  
            let formData = {
                name: name,
                email: email,
                mesage: msg,
                blog_id: blog_id
            }
            let URl = "/comments";

  
            let result=await axios.post(URl, formData);
  
  
            if(result.status===200 && result.data===1){
                  alert('Your request has been submitted successfully');
                  contactForm.reset();
            }
            else{
                  alert('Something went wrong')
            }
        }
  
  
    })
  
  
  </script>
  