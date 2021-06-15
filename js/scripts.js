import "../css/style.css"

// Our modules / classes
import HeroSlider from "./modules/HeroSlider"


// Instantiate a new object using our modules/classes
var heroSlider = new HeroSlider()

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
