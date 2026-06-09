import sys

# Read mastermind.html
with open('public/mastermind.html', 'r') as f:
    mastermind_content = f.read()

# Read whats-inside.html
with open('public/whats-inside.html', 'r') as f:
    whats_inside_lines = f.readlines()

# Extract CSS from whats-inside.html
css_lines = whats_inside_lines[668:1863]
css_str = "".join(css_lines)

# Insert CSS into mastermind.html right before </style>
style_end_index = mastermind_content.find('</style>')
if style_end_index != -1:
    mastermind_content = mastermind_content[:style_end_index] + css_str + mastermind_content[style_end_index:]

# Extract the HTML block for frs-hero__metrics (lines 2011 to 2112)
# Since line numbers can be slightly off, let's extract by string matching
whats_content = "".join(whats_inside_lines)
import re
match = re.search(r'(<div class="frs-hero__metrics" aria-hidden="true">.*?</article>\s*</div>\s*</div>)', whats_content, re.DOTALL)
if match:
    metrics_html = match.group(1)
    # Replace mm-compose in mastermind.html
    # In mastermind.html, the target block is:
    # <div class="mm-compose" aria-hidden="true">
    #   <img class="mm-compose__img mm-compose__img--base" src="assets/HOME-business-intelligence-core%20assumptions.png" alt="" loading="lazy">
    #   <img class="mm-compose__img mm-compose__img--left" src="assets/HOME-business-intelligence-monthly-income.png" alt="" loading="lazy">
    #   <img class="mm-compose__img mm-compose__img--right" src="assets/HOME-business-intelligence-conversion-average.png" alt="" loading="lazy">
    # </div>
    
    target_match = re.search(r'<div class="mm-compose" aria-hidden="true">.*?</div>', mastermind_content, re.DOTALL)
    if target_match:
        mastermind_content = mastermind_content[:target_match.start()] + metrics_html + mastermind_content[target_match.end():]
        with open('public/mastermind.html', 'w') as f:
            f.write(mastermind_content)
        print("Successfully updated mastermind.html")
    else:
        print("Could not find mm-compose in mastermind.html")
else:
    print("Could not find frs-hero__metrics in whats-inside.html")

