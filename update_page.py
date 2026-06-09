import sys

with open('/Users/andrewvass/Developer/loan-atlas/tla-website-v1/public/consultation-mastermind.html', 'r') as f:
    content = f.read()

with open('/Users/andrewvass/Developer/loan-atlas/tla-website-v1/public/mastermind.html', 'r') as f:
    mm_content = f.read()

# Extract from mastermind.html
start_testimonials = mm_content.find('    <!-- ── 11. TESTIMONIALS + PROOF')
end_testimonials = mm_content.find('    <!-- ── 12. MASTERMIND PRICING')
if start_testimonials == -1 or end_testimonials == -1:
    print("Could not find testimonials section in mastermind.html")
    sys.exit(1)
testimonials_html = mm_content[start_testimonials:end_testimonials]

start_pricing = end_testimonials
end_pricing = mm_content.find('  </main>')
if start_pricing == -1 or end_pricing == -1:
    print("Could not find pricing section in mastermind.html")
    sys.exit(1)
pricing_html = mm_content[start_pricing:end_pricing]

# Find remove bounds in consultation-mastermind.html
start_remove = content.find('    <!-- ── Featured testimonials ── -->')
end_remove = content.find('  </main>')
if start_remove == -1 or end_remove == -1:
    print("Could not find bounds to remove in consultation-mastermind.html")
    sys.exit(1)

# The user asked for "pricing card section and the testimonials section"
new_content = content[:start_remove] + pricing_html + testimonials_html + content[end_remove:]

with open('/Users/andrewvass/Developer/loan-atlas/tla-website-v1/public/consultation-mastermind.html', 'w') as f:
    f.write(new_content)

print("Updated consultation-mastermind.html successfully.")
