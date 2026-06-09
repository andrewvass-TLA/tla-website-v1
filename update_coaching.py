import sys
import re

with open('public/mastermind.html', 'r') as f:
    content = f.read()

css_block = """
    /* Card stack for weekly coaching */
    .mm-card-stack {
      position: relative;
      width: 100%;
      aspect-ratio: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .mm-card-stack__img {
      position: absolute;
      width: 65%;
      border-radius: 12px;
      box-shadow: 0 20px 40px rgba(2, 28, 54, 0.25);
      border: 6px solid white;
      opacity: 0;
      transform: translateY(40px) scale(0.9);
      animation: cardFlyIn 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
    }
    
    .mm-card-stack[data-animated="true"] .mm-card-stack__img {
      /* fallback if data-reveal adds classes or we want to trigger animation later */
    }
    
    /* Using data-reveal="up" on parent mm-row, we can use that to trigger animations */
    .mm-row.is-visible .mm-card-stack__img {
      animation: cardFlyIn 0.7s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
    }
    
    .mm-card-stack__img:nth-child(1) { z-index: 1; animation-delay: 0.1s; --rot: -12deg; --x: -15%; --y: 10%; }
    .mm-card-stack__img:nth-child(2) { z-index: 2; animation-delay: 0.25s; --rot: -4deg; --x: -5%; --y: -5%; }
    .mm-card-stack__img:nth-child(3) { z-index: 3; animation-delay: 0.4s; --rot: 6deg; --x: 10%; --y: 5%; }
    .mm-card-stack__img:nth-child(4) { z-index: 4; animation-delay: 0.55s; --rot: 15deg; --x: 25%; --y: -8%; }

    @keyframes cardFlyIn {
      to {
        opacity: 1;
        transform: translate(var(--x), var(--y)) rotate(var(--rot)) scale(1);
      }
    }
"""

style_end_index = content.find('  </style>')
if style_end_index != -1:
    content = content[:style_end_index] + css_block + content[style_end_index:]

html_search = r'<div class="mm-row__media">\s*<img src="assets/weekly-coaching\.png" alt="Live weekly coaching session" loading="lazy">\s*</div>'
html_replace = """<div class="mm-card-stack">
              <img class="mm-card-stack__img" src="assets/what's-inside-office-hours.jpg" alt="Office Hours" loading="lazy">
              <img class="mm-card-stack__img" src="assets/what's-inside-talk-to-tim.jpg" alt="Talk to Tim" loading="lazy">
              <img class="mm-card-stack__img" src="assets/what's-inside-masterclass.jpg" alt="Masterclass" loading="lazy">
              <img class="mm-card-stack__img" src="assets/what's-inside-ai-labs.jpg" alt="AI Labs" loading="lazy">
            </div>"""

new_content, count = re.subn(html_search, html_replace, content)
if count > 0:
    with open('public/mastermind.html', 'w') as f:
        f.write(new_content)
    print("Successfully updated HTML and CSS.")
else:
    print("Could not find the HTML block to replace.")
