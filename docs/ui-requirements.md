# UI requirements from Sir Cadaoas' lecture (Nov 21, 2026)

Source: "Creating an Effective E-commerce Website" (15 slides), in the pptx and Google Slides next to this file.
Use this as the checklist for the Hygears Web Portal UI. It was written for e-commerce, so "products" map to our tools and merch, and "checkout" maps to our reservation form.

## Foundations
- **Purpose:** every page helps the visitor do one thing (browse, compare, reserve).
- **Usability:** visitors find items and finish a reservation in a few clicks, without instructions.
- **Trust:** clean design, clear policies (borrowing rules) and secure forms.
- **Performance:** fast pages and a working site.

## Plan before coding
- Define the audience: who uses it, what they need, what we offer.
- Map the sitemap: Home, Tools, Item, Reserve, Track, Join, About, Officer pages.
- Sketch wireframes on paper or in Figma before writing HTML.
- Design the database before building pages.

## Layout and visual hierarchy
- **Grid:** CSS Grid or Flexbox, so items align in clear columns.
- **Hierarchy:** size, weight and position tell users what to read first.
- **Alignment:** align edges consistently, nothing placed at random.
- **Proximity:** group related things (item name, availability, Reserve button).

## Color and contrast
- **Limited palette:** one primary, one accent and neutrals.
- **Meaning:** the accent color is only for buttons and key actions.
- **Contrast:** text needs at least 4.5:1 contrast with its background.
- **Never color alone:** pair error and status colors with icons or text.

## Typography
- Two fonts at most: one for headings, one for body text.
- Body text 16px or larger, line-height around 1.5.
- Fixed sizes for h1, h2, h3 and body across all pages.
- Paragraphs about 60 to 80 characters per line.

## Images, icons and white space
- Sharp photos with the same aspect ratio; use object-fit.
- Resize and compress images so pages load fast.
- One icon style across the whole site.
- Use white space so content can breathe and pages are easy to scan.

## Consistency across pages
- **CSS variables:** colors, fonts and spacing defined once in :root and reused.
- **One stylesheet:** a shared style.css linked on every page, not copied per page.
- **PHP includes:** shared header.php and footer.php, so navigation never differs.
- **Component rules:** buttons, cards and forms look and behave the same everywhere.

## Navigation and flow
- Same menu on every page, with the current page highlighted.
- Search and filter items by name, category or availability.
- Shortest path to reserve: item, details, confirm. Remove unnecessary steps.
- Feedback messages for success, errors and added items.

## Content
- Specific, short item names.
- Descriptions lead with what it's for, then specs.
- Action words on buttons: Reserve, Track Request, Apply.
- Helpful labels, hints and error messages on every form.

## Look and work like a real organization
- Real content: no lorem ipsum, placeholder images or broken links.
- Branding: logo, favicon, page titles and a consistent name.
- Trust pages: About, contact, borrowing rules.
- Clean code: indented, clearly named files, comments, no unused code.

## Responsive and accessible
- Mobile first: design for small screens, then add media queries.
- Flexible units: rem, %, max-width instead of fixed pixels.
- Alt text on every image.
- Keyboard use: visible focus states, labels on inputs, logical tab order.

## Security (PHP)
- Prepared statements: PDO or MySQLi parameters to block SQL injection.
- Password hashing: password_hash() and password_verify(), never plain text.
- Escape output: htmlspecialchars() to prevent cross-site scripting.
- Validate input in JavaScript and again on the server.

## Final checklist before submitting
- **Design:** consistent colors, fonts and spacing on every page.
- **Function:** reserve, update and cancel work; submitting saves a request.
- **Quality:** tested on phone and desktop; no broken links or errors.
- **Delivery:** organized folders, SQL file, README and login credentials.

**Key takeaway:** plan, design consistently, write clear content, and build securely.
