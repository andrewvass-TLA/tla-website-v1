import sys
import re

with open('public/mastermind.html', 'r') as f:
    content = f.read()

# The CSS block starts around here:
# /* =====================================================================
#    AI-Driven Financial Review — click-and-reveal showcase
#    ===================================================================== */
# We inserted it right before `</style>`

# Let's find the start string
start_str = "/* =====================================================================\n       AI-Driven Financial Review — click-and-reveal showcase"

start_idx = content.find(start_str)
if start_idx != -1:
    end_idx = content.find("</style>", start_idx)
    if end_idx != -1:
        # Check if there are a few blank lines we can remove
        while content[start_idx-1] == '\n':
            start_idx -= 1
        
        content = content[:start_idx] + "\n  " + content[end_idx:]
        with open('public/mastermind.html', 'w') as f:
            f.write(content)
        print("Successfully removed CSS block.")
    else:
        print("Could not find </style> after the start string.")
else:
    print("Could not find the start of the CSS block.")
