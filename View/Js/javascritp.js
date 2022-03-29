const ratio = .3
const options = {
     /*option element racine qui servira de zone d'affichage
     pour detecter si l'element est visible ou non */

    root: null, /* definir quand estceque visible a lecran*/
    rootMargin: '0px',
    threshold: ratio /*indique a quel moment va dectecter 
    linterceptionObserveur fonctionne ( .1 = 10% du ratio ) des element declenche)*/
  }
  const handleIntersect = function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add("scroll-visible");
            observer.unobserve(entry.target);
            console.log(entry.intersectionRatio);
        }
      });
}
  /* on crée une const observeur */
  const observer = new IntersectionObserver(handleIntersect, options);

  /* on crée un observeur pour le scroll */
 document.querySelectorAll('.scroll').forEach(function (r) {
     observer.observe(r)
 })

