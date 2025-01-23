import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
  new Route("/", "Accueil", "/pages/home.html"),
  new Route("/covoiturage", "Covoiturage", "/pages/covoiturage.html"),
  new Route("/contact", "Contact", "/pages/contact.html"),
  new Route("/course", "Créer une course", "/pages/course.html"),
  new Route("/signin", "Connexion", "/pages/auth/signin.html"),
  new Route("/account", "Mon compte", "/pages/auth/account.php"),
  new Route(
    "/editpassword",
    "Éditer votre mot de passe",
    "/pages/auth/editpassword.html"
  ),
  new Route("/signup", "Inscription", "/pages/auth/signup.html"),
  new Route("/signup2", "Inscription", "/pages/auth/signup2.html"),
  new Route("/signup3", "Inscription", "/pages/auth/signup3.html"),
  new Route("/allResa", "Vos voyages", "/pages/reservation/allResa.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Écoride";
