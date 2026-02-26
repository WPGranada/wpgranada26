# WP Granada 26 - Block Theme

Block theme para la comunidad WordPress Granada. Diseñado para mostrar eventos, meetups y conectar con la comunidad local de profesionales WordPress.

## Requisitos

- WordPress 6.5+
- PHP 7.4+
- Plugin recomendado: [Icon Block](https://wordpress.org/plugins/icon-block/) (para los iconos del patrón Canales)

## Estructura

```
wpgranada26/
├── style.css                  # Metadatos del tema y CSS mínimo
├── theme.json                 # Sistema de diseño completo
├── functions.php              # Categorías de patrones y soporte del tema
├── templates/                 # Plantillas de bloque
│   ├── index.html             # Plantilla principal (listado de posts)
│   ├── home.html              # Plantilla de inicio (vacía para componer)
│   ├── single.html            # Entrada individual
│   ├── page.html              # Página estática
│   ├── archive.html           # Archivo de categorías/tags
│   ├── search.html            # Resultados de búsqueda
│   └── 404.html               # Página no encontrada
├── parts/                     # Partes de plantilla reutilizables
│   ├── header.html            # Cabecera con logo y navegación
│   └── footer.html            # Pie con columnas de enlaces y redes
├── patterns/                  # Patrones de bloque
│   ├── hero-section.php       # Hero con badge, título y CTAs
│   ├── next-event.php         # Tarjeta horizontal de próximo evento
│   ├── past-events.php        # Grid de 3 tarjetas de eventos pasados
│   ├── stats-section.php      # Contadores sobre fondo azul
│   ├── channels-section.php   # Grid de canales (Meetup, YouTube, Telegram)
│   └── cta-speaker.php        # Call to Action para ser ponente
├── assets/
│   └── fonts/                 # Fuentes locales (Plus Jakarta Sans, Inter)
└── styles/                    # Style variations (extensible)
```

## Sistema de Diseño

### Colores
| Token | Hex | Uso |
|-------|-----|-----|
| `primary` | `#3858e9` | Botones, enlaces, acentos |
| `primary-dark` | `#213fd4` | Hover, sección stats |
| `primary-light` | `#eff2ff` | Fondos alternos claros |
| `primary-muted` | `#c7d1ff` | Badges, bordes de tarjetas |
| `base` | `#ffffff` | Fondo principal |
| `contrast` | `#1e1e1e` | Texto principal, footer |
| `secondary` | `#40464d` | Texto secundario |
| `tertiary` | `#656a71` | Texto terciario |
| `muted` | `#979aa1` | Texto muy sutil |

### Tipografía
- **Headings**: Plus Jakarta Sans (700, 800) - fluid typography
- **Body**: Inter (400–700) - fluid typography
- Tamaños desde `x-small` (0.8125rem) hasta `colossal` (4.5rem)

### Spacing
- 10 niveles de espaciado: desde `10` (0.25rem) hasta `100` (5rem)
- Gap global entre bloques: 0 (las secciones apilan sin separación)

### Layout
- `contentSize`: 1280px
- `wideSize`: 1440px

## Uso

1. Instala y activa el tema.
2. Ve a **Apariencia > Editor** para personalizar el sitio.
3. Crea una página y asígnale la plantilla **Home**.
4. Usa el editor de bloques para insertar los patrones del tema.
5. Sube el logo del sitio en **Apariencia > Editor > Estilos > Identidad del sitio**.

## Patrones disponibles

Los patrones se encuentran en el insertador de bloques bajo las categorías:
- **WP Granada: Hero** - Sección hero principal
- **WP Granada: Eventos** - Próximo evento y eventos anteriores
- **WP Granada: Estadísticas** - Contadores de la comunidad
- **WP Granada: Canales** - Canales de comunicación
- **WP Granada: Call to Action** - Ser ponente

## Decisiones técnicas

- **theme.json v2**: Compatibilidad con WordPress 6.5+.
- **Fuentes locales**: Plus Jakarta Sans e Inter descargadas y servidas localmente (sin dependencias externas).
- **Variable fonts**: Un solo archivo woff2 por fuente cubre todos los pesos necesarios.
- **blockGap: 0**: Las secciones full-width apilan sin separación vertical; cada patrón define su propio spacing interno.
- **CSS mínimo**: Solo se usa `style.css` para bordes de tarjetas y hover effects que no se pueden declarar en theme.json.
- **Icon Block**: Los iconos del patrón de canales usan el bloque `outermost/icon-block` (SVG inline). Si el plugin no está instalado, los iconos se pueden reemplazar por imágenes.
- **Social Links nativo**: El footer usa el bloque `wp:social-links` de WordPress core.
