// const quest= document.getElementsByClassName(".ques")
// quest.forEach((ques)=> {
//     ques.addEventListener("click", function()
//     {
//         ques.classlist.toggle(".active")
//     })
    
// });




// const questions = document.querySelectorAll(".ques");

// questions.forEach((ques) => {
//     ques.addEventListener("click", function () {
//         ques.classList.toggle("active");
//         const answer = ques.querySelector(".answer");
//         if (ques.classList.contains("active")) {
//             answer.style.maxHeight = answer.scrollHeight + "px";
//         } else {
//             answer.style.maxHeight = null;
//         }
//     });
// });



const questions = document.querySelectorAll(".ques");

questions.forEach((ques) => {
    const sideIcon = ques.querySelector("svg");
    const answer = ques.querySelector(".answer");
    
    sideIcon.addEventListener("click", function () {
        ques.classList.toggle("active");
        if (ques.classList.contains("active")) {
            answer.style.maxHeight = answer.scrollHeight + "px";
        } else {
            answer.style.maxHeight = null;
        }
    });
});
