

const newProjectButtonImage = document.getElementById('new-project-button-image')
const newProjectButton = document.getElementById('new-project-button')

newProjectButton.addEventListener('mouseover', () => {
    newProjectButton.classList.remove('bg-white')
    newProjectButton.classList.add('bg-black')
    newProjectButton.classList.add('text-white')
    newProjectButtonImage.classList.add('invert')
    
}
)

newProjectButton.addEventListener('mouseleave', () => {
    newProjectButton.classList.remove('bg-black')
    newProjectButton.classList.add('bg-white')
    newProjectButton.classList.remove('text-white')
    newProjectButtonImage.classList.remove('invert')
}
)


const newTeamButton = document.getElementById('new-team-button')
const newTeamButtonImage = document.getElementById('new-team-button-image')

newTeamButton.addEventListener('mouseover', () => {
    newTeamButton.classList.remove('bg-white')
    newTeamButton.classList.add('bg-black')
    newTeamButton.classList.add('text-white')
    newTeamButtonImage.classList.add('invert')
    
}
)

newTeamButton.addEventListener('mouseleave', () => {
    newTeamButton.classList.remove('bg-black')
    newTeamButton.classList.add('bg-white')
    newTeamButton.classList.remove('text-white')
    newTeamButtonImage.classList.remove('invert')
}
)


const clickProfile = document.getElementById('dropdown-button-profile')
const dropdownProfile = document.getElementById('dropdown-profile')
const imageChevronProfile = document.getElementById('chevron')

clickProfile.addEventListener('click', () => {

    if (dropdownProfile.classList.contains('block')) {
        dropdownProfile.classList.remove('block')
        dropdownProfile.classList.add('hidden')
        imageChevronProfile.classList.remove('rotate-180')
        
        
    } 
    else if(dropdownProfile.classList.contains('hidden')) {
        dropdownProfile.classList.remove('hidden')
        dropdownProfile.classList.add('block')
        
        imageChevronProfile.classList.add('rotate-180')
        
    }

}
)




dropdownProfile.addEventListener('mouseleave', () => {
    
        if (dropdownProfile.classList.contains('block')) {
            dropdownProfile.classList.remove('block')
            dropdownProfile.classList.add('hidden')
            imageChevronProfile.classList.remove('rotate-180')
            
        } 
        else if(dropdownProfile.classList.contains('hidden')) {
            dropdownProfile.classList.remove('hidden')
            dropdownProfile.classList.add('block')
            
            imageChevronProfile.classList.add('rotate-180')
        }
    
    }
)
    