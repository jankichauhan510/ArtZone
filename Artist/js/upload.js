var images = [];
function image_select(){

    var image =  document.getElementById('file').files;
    for( i=0 ; i < image.length ; i++)
    {
        if(check_duplicate(image[i].name)){
        images.push({
            "name": image[i].name,
            "url": URL.createObjectURL(image[i]),
            "file": image[i],
        })
    }else{
             alert(image[i].name + "is alredy added to the list");
    }}
     document.getElementById('form').reset();
    document.getElementById('container').innerHTML = image_show();

}
function image_show(){
    var image ="";
    images.forEach((e)=>{
        image += `  <div class="image_container  d-flex  justify-content-center position-relative" >
        <img src="`+ e.url +`" alt="image" id="myImage">
        <span class="position-absolute "  onclick="delete_image(`+ images.indexOf(e) +`)">&times;</span>
    </div>`;
      })
      return image;
    
}
function delete_image(e){
    images.splice(e ,1);
    document.getElementById('container').innerHTML = image_show();

}
function check_duplicate(name){
    var image = true;
    if(images.lenght > 0){
    for(j=0 ; j< images.length ; j++){
        if(images[j].name == name){
            image = false;
            break;
        }
    }
    }
    return image;
}


  // Function to check for the image and display an alert
  function checkImage() {
    var image = document.getElementById('myImage');
    if (!image ) {
        alert('No image found on this page.');
    }
    else{
        alert("Successfully uploaded");
    }
}

// Add a click event listener to the submit button
// document.getElementById('Submit').addEventListener('click', checkImage);

