const schoolButton: Element | null = document.querySelector("#school-button")
const workButton: Element | null = document.querySelector("#work-button")

const schoolContainer: Element | null = document.querySelector("#parcours-scolaire")
const workContainer: Element | null = document.querySelector("#parcours-professionel")

// bg-blue-marguerite-600

schoolButton?.addEventListener("click",()=>{
    if(!schoolButton.classList.contains("bg-blue-marguerite-600")){
        schoolButton.classList.add("bg-blue-marguerite-600")
        schoolButton.classList.add("text-white")
        workButton?.classList.remove("bg-blue-marguerite-600")
        workButton?.classList.remove("text-white")
        workContainer?.classList.add("hidden")
        schoolContainer?.classList.remove("hidden")
    }
})

workButton?.addEventListener("click",()=>{
    if(!workButton.classList.contains("bg-blue-marguerite-600")){
        workButton.classList.add("bg-blue-marguerite-600")
        workButton.classList.add("text-white")
        schoolButton?.classList.remove("bg-blue-marguerite-600")
        schoolButton?.classList.remove("text-white")
        workContainer?.classList.remove("hidden")
        schoolContainer?.classList.add("hidden")
    }
})