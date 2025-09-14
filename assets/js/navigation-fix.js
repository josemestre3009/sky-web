// assets/js/navigation-fix.js
(function () {
  const header = document.getElementById('header');
  const offset = (header ? header.offsetHeight : 0) + 20;
  const nav = document.getElementById('navbar');
  if (!nav) return;

  const links = nav.querySelectorAll('.nav-link');
  const hrefOf = a => (a.getAttribute('href') || '').toLowerCase();

  function clearActive() { 
    links.forEach(a => a.classList.remove('active')); 
  }
  
  function setActiveBy(predicate) {
    clearActive();
    for (const a of links) {
      if (predicate(a)) { 
        a.classList.add('active'); 
        break; 
      }
    }
  }

  // Obtener la página actual de forma más robusta
  const getCurrentPage = () => {
    const pathname = window.location.pathname;
    const filename = pathname.split('/').pop() || 'index.php';
    return filename.toLowerCase();
  };

  const currentPage = getCurrentPage();
  const isIndex = currentPage === '' || currentPage === 'index.php' || currentPage === 'index.html' || currentPage === '/';

  console.log('Navigation Fix - Página actual:', currentPage, 'Es index:', isIndex);
  console.log('Links encontrados:', links.length);

  if (isIndex) {
    // --- Index: resaltar por sección visible + smooth scroll ---
    const sections = Array.from(document.querySelectorAll('section[id]'));
    const defaultId = sections[0]?.id || 'hero';

    const initialHash = (location.hash || ('#' + defaultId)).toLowerCase();
    setActiveBy(a => hrefOf(a).endsWith(initialHash));

    function updateOnScroll() {
      const y = window.scrollY + offset + 1;
      let current = defaultId;
      for (const s of sections) {
        const top = s.offsetTop, bottom = top + s.offsetHeight;
        if (y >= top && y < bottom) { 
          current = s.id; 
          break; 
        }
      }
      setActiveBy(a => hrefOf(a).endsWith('#' + current));
    }

    // Inicializar al cargar la página
    updateOnScroll();
    window.addEventListener('scroll', updateOnScroll);
    window.addEventListener('resize', updateOnScroll);

    // Smooth scroll para enlaces con ancla (#id o index.php#id)
    links.forEach(link => {
      const href = hrefOf(link);
      const idx = href.indexOf('#');
      if (idx !== -1) {
        link.addEventListener('click', e => {
          const id = href.slice(idx + 1);
          const target = document.getElementById(id);
          if (target) {
            e.preventDefault();
            
            // Cerrar menú móvil si está abierto
            const navbar = document.getElementById('navbar');
            if (navbar && navbar.classList.contains('navbar-mobile')) {
              navbar.classList.remove('navbar-mobile');
              const navbarToggle = document.querySelector('.mobile-nav-toggle');
              if (navbarToggle) {
                navbarToggle.classList.toggle('bi-list');
                navbarToggle.classList.toggle('bi-x');
              }
            }
            
            window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
            history.replaceState(null, '', '#' + id);
          }
        });
      }
    });

  } else {
    // --- Páginas internas: resaltar por archivo actual ---
    console.log('Procesando páginas internas para:', currentPage);
    
    // Función mejorada para comparar páginas
    const normalizePageName = (pageName) => {
      return pageName.replace('.php', '').replace('.html', '').toLowerCase();
    };

    setActiveBy(a => {
      const href = hrefOf(a);
      if (href.startsWith('#')) return false; // ignora solo-ancla
      
      // Extraer el nombre del archivo del href
      const file = href.split('#')[0].split('/').pop();
      const normalizedHref = normalizePageName(file);
      const normalizedCurrent = normalizePageName(currentPage);
      
      const isMatch = normalizedHref === normalizedCurrent;
      console.log('Comparando enlace:', { 
        linkText: a.textContent.trim(),
        currentPage, 
        normalizedCurrent, 
        href, 
        file, 
        normalizedHref, 
        isMatch 
      });
      
      return isMatch;
    });
  }

  // Manejar cambios de hash en la URL
  window.addEventListener('hashchange', () => {
    if (isIndex) {
      const hash = location.hash.toLowerCase();
      if (hash) {
        setActiveBy(a => hrefOf(a).endsWith(hash));
      }
    }
  });
})();

