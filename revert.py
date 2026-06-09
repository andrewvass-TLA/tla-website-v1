import sys
import re

with open('public/mastermind.html', 'r') as f:
    content = f.read()

# Remove the inserted frs CSS
# The CSS started with "    .frs-section {\n"
# Let's find that block and remove it.
# Actually, I can search for "    .frs-section {" all the way to "</style>"
css_start = content.find("    .frs-section {")
if css_start != -1:
    style_end = content.find("  </style>", css_start)
    if style_end != -1:
        # Check if there's an original newline before .frs-section
        content = content[:css_start] + content[style_end:]
        print("Removed CSS block")

# Replace the HTML block
# The block starts with <div class="frs-hero__metrics" aria-hidden="true"> and ends with </div> right before <div class="mm-row__copy">
# Let's use regex
match = re.search(r'<div class="frs-hero__metrics" aria-hidden="true">.*?</article>\s*</div>\s*</div>', content, re.DOTALL)
if match:
    replacement = """<div class="mm-row__media" data-reveal="fade">
            <img src="assets/loan-officer-business-intelligence.png" alt="Loan Officer Business Intelligence" loading="lazy">
          </div>"""
    content = content[:match.start()] + replacement + content[match.end():]
    print("Replaced HTML block")

with open('public/mastermind.html', 'w') as f:
    f.write(content)

