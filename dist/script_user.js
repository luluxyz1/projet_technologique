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
    