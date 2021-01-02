//Gestion de l'ajout de notes
const addBtn = document.querySelector('.add');
const listNotes = document.querySelector('#notes');

addBtn.addEventListener('click', () => {
    addNewNote();
})
const addNewNote = () => {
    const note = document.createElement("div");
    note.classList.add("notes");
    note.classList.add("my-3");

    note.innerHTML=`
        <div class="tools">
            <button class="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
            <button class="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </div>
        <div class="main hidden"></div>
        <textarea></textarea>
    `;

//     <div class="notes">
//     <div class="tools">
//         <button class="edit"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>
//         <button class="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
//     </div>
//     <div class="main hidden"></div>
//     <textarea></textarea>
// </div>
    const editBtn = note.querySelector('.edit');
    const deleteBtn = note.querySelector('.delete');
    // const notesEl = note.querySelector('.notes');
    
    const main = note.querySelector('.main');
    const textArea = note.querySelector('textarea');
    
    editBtn.addEventListener('click', () => {
        main.classList.toggle("hidden");
        textArea.classList.toggle("hidden");
    })

    deleteBtn.addEventListener('click', () => {
        note.remove();
    })
    
    textArea.addEventListener('input', (e) => {
        const { value } = e.target;
        main.innerHTML = marked(value);
    })

    listNotes.prepend(note);

}


// $(document).ready(() => {
//     $('.edit').on('click', () => {
//         $('.main').toggleClass('hidden');
//         $('textarea').toggleClass('hidden');
//     })

//     $('textarea').on('change', (e) => {
//         console.log(e);
//         $('.main').text(e.target);
//     })
// })
