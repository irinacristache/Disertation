document.addEventListener('DOMContentLoaded', function() {
    var loadImage = document.getElementById('load');
    function loadInputHandler(event) {
      //Take the image that the user picked and find its location.
      var imageFile = event.target.files[0];
      var imageElement = document.getElementById('image');
      //Set the URL to be the image that the user picked.
      imageElement.setAttribute('src', URL.createObjectURL(imageFile));
      //var imgContainer = document.getElementById('imgContainer');
      //imgContainer.setAttribute("width", "100px");
      //imgContainer.setAttribute("height", "100px");
      //Caman method will create a canvas of the image that the user loads.
      Caman("#image", function() {
        this.revert(true);
        console.log(this);
        //alert(this.canvas.style.cssText);
        
        //Autoresize photo
        var newWidth = this.preScaledWidth;
        var newHeight = this.preScaledHeight;
        //If it is larger than 750 divide by 2. 
        while(newWidth > 750)
        {
          newWidth = newWidth / 2;
          newHeight = newHeight / 2;
        }
        //this.canvas.style.cssText = "width: 300px; height: 500px;";
        this.canvas.style.cssText = "width: " + newWidth + "px; height: " + newHeight + "px;";
        //alert(this.canvas.style.cssText);
        this.render();
        //console.log(this);
      });
      //imageElement = document.getElementById('image');
      //imageElement.removeAttribute("width");
      //imageElement.removeAttribute("height");
        
    };
    //Call the following function whenever the user picked a new image.
    loadImage.onchange = loadInputHandler;
    
    //This is the function for applying the slider effects (passess the atribute of event).
    function changeSliderHandler(event) {
        //Use Caman method to make a canvas of the image in the app
        //Call function render caman which will apply the slider effect and clear effect that were there before.
        Caman("#image", function renderCaman() {
         this.revert(false);
         //this is what is actually applying the event according to the value we have on the slider.
         //event.target.name collects information - gets the name of the slider - ex: brightness.
         //event.target.value collects the value - ex: 5.
         this[event.target.name](event.target.value).render(function() {
           if(textInput.value) {
            //If user typed text apply text on picture.
            applyText;
           };
         });
        });
    };
    /*Adjust edits for each different slider.
    var brightnessRange = document.getElementById("brightness");
    brightnessRange.onchange = changeSliderHandler;
    
    var vibranceRange = document.getElementById("vibrance");
    vibranceRange.onchange = changeSliderHandler;
    
    var hueRange = document.getElementById("hue");
   hueRange.onchange = changeSliderHandler;
    
    var gammaRange = document.getElementById("gamma");
    gammaRange.onchange = changeSliderHandler;
    */
    
    //Get all the documents in the html doc that have input type equals range.
    var ranges = document.querySelectorAll('input[type="range"]');
    ranges.forEach(function(range){
        //When one of the ranges (slider) changes, then call Adjusment Handler.
        range.onchange = changeSliderHandler;
    });
    
    //Get the HTML element of the reset button by it's id of reset - later we can use it to see if it has been clicked.
    var resetButton = document.getElementById("reset");
    function resetButtonHandler(event) {
   
    //forEach loop resets effect values back to 0 then clears all effects and set canvas back to original state. 
       ranges.forEach(function(range){
        range.value=0;
    });
       Caman("#image", function() {
        this.revert(true);
     });  
       
    }
    //Call this function whenever reset button is cliecked.
    resetButton.onclick = resetButtonHandler;
    
function filterButtonHandler(event) {
//Use Caman method to create Canvas of image and then apply filter effect.
    Caman('#image', function () {
        //If another filter is applied, remove old filter before adding the new.
        this.revert(false);
        //Add filter effect - when the user clicks on a button, click that buttons ID and send that into the Caman method to render the filter.
        this[event.target.id]().render(function() {
            if(textInput.value) {
                
                applyText;
              };
            });
        });
};

//Use query selctor to get all filter buttons and store them into an array. .filter = search ever html method for an element that has the .filter class.
var filterButtons = document.querySelectorAll('.filter');
filterButtons.forEach(function(filterButton){
    //When filter button is clicked call the filter button handler function
    filterButton.onclick = filterButtonHandler;
});

//Perform this function on the save button index.
var saveButton = document.getElementById('save');
//Use Caman method to save image.
function saveButtonHandler(event /*event is the parameter*/) {
    //save the image that the user edited.
    Caman('#image', function() {
        this.render(function() {
            applyText();
            this.save('image.png');
             });
        });   
}; 

saveButton.onclick = saveButtonHandler;

//Get the input that the user types in using the variable textInput.
var textInput = document.getElementById("message");
function applyText() {
  var canvas = document.getElementById('image');
  var ctx = canvas.getContext('2d');
  //Set fill style for the canvas - the background colour for the text box.
  //set opacity 0.5 decreases opacity.
  //If it was 1 the user would not be able to see through the box.
  ctx.fillStyle = "rgba(0,0,0,0.5)"; 
  //Create variable boxTop which tells where the top of the box should be.
  //Canvas.Height/2 helps us divide the box and put the text in the center. 
  var boxTop = (canvas.height/2)-30;
  ctx.fillRect(0, boxTop, canvas.width, 65);
  ctx.font = "50px Raleway";
  ctx.fillStyle = 'white';
  ctx.textAlign = 'center';
  //fill in and draw the text on the canvas. Get the text input value which is what user typed and fill in the box. Box helps position the text as it is in the vertical center of the rectangle.
  ctx.fillText(textInput.value, canvas.width/2, boxTop+50);
};
//Extract the message from the button with the id submit.
var submitText = document.getElementById('submit');
//When submit is clicked, apply text on canva.
submitText.onclick = applyText;

/*window.onload = function(){
     var canvas = document.getElementById("myCanvas");
     var context = canvas.getContext("2d");
     var imageObj = new Image();
     imageObj.onload = function(){
         context.drawImage(imageObj, 10, 10);
         context.font = "40pt Raleway";
         context.fillText("My TEXT!", 20, 20);
     }; */

//Preview Function
function previewCrop() {
  //Get the width parameter inserted by the user in the input box.
  var width = Number(document.getElementById('width').value);
  //Get the height parameter inserted by the user in the input box.
  var height = Number(document.getElementById('height').value);
  //Get the x parameter inserted by the user in the input box.
  var x = Number(document.getElementById('x').value);
  //Get the y parameter inserted by the user in the input box.
  var y = Number(document.getElementById('y').value);
  //Draw rectangle for cropping.
  var canvas = document.getElementById('image');
  var ctx = canvas.getContext('2d');
  ctx.fillStyle = "rgba(0,0,0,0.5)";
  ctx.fillRect(x,y,width,height);
  
  //Call reset canvas function to erase the preview box from the picture
  setTimeout(function() {
    resetButtonHandler();
  },3000);
};
  
  var preview = document.getElementById('preview');
  preview.onclick = previewCrop;
  
  //Crop function
  function cropImage() {
    //Get the width parameter inserted by the user in the input box.
  var width = Number(document.getElementById('width').value);
  //Get the height parameter inserted by the user in the input box.
  var height = Number(document.getElementById('height').value);
  //Get the x parameter inserted by the user in the input box.
  var x = Number(document.getElementById('x').value);
  //Get the y parameter inserted by the user in the input box.
  var y = Number(document.getElementById('y').value);
  Caman('#image', function() {
    this.crop(width, height, x, y);
    this.render();
    
    });
    
    };
    
    var crop = document.getElementById('crop');
    crop.onclick = cropImage;

    
}, false);