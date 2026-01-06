# Touchscreen Display Specifications

## Display Information
- **Orientation:** Vertical (Portrait)
- **Interface Type:** Touchscreen
- **Primary Use:** Standing/kiosk display

## Design Requirements

### Touch Targets
- **Minimum Size:** 44px × 44px (Apple HIG standard)
- **Recommended Size:** 48px × 48px for better accessibility
- **Spacing:** Minimum 8px between interactive elements

### Typography
- **Body Text:** Minimum 16px for readability at standing distance
- **Headings:** Scaled appropriately for visibility
- **Line Height:** 1.5 minimum for comfortable reading

### Layout Considerations
- Single column layout preferred for portrait orientation
- Avoid horizontal scrolling
- Content should be vertically scrollable
- Navigation should be sticky/fixed for easy access
- Cards and interactive elements should be stacked vertically

### Touch Interactions
- Clear visual feedback on touch (hover states)
- No reliance on hover-only interactions
- Adequate padding around clickable elements
- Swipe gestures should be intuitive and documented

### Accessibility
- High contrast between text and background
- Large, legible fonts
- Clear button states
- Touch-friendly form inputs

## Brand Colors (Applied)
- **Dark Green:** #2C5234 (Primary)
- **White:** #FFFFFF (Text on dark backgrounds)
- **Silver Grey:** #A2AAAD (Secondary/Borders)

## Font
- **Primary:** Kimberley (School brand font)

## Notes for Developers
- Test on actual touchscreen hardware when possible
- Consider screen size and resolution for final deployment
- Ensure all interactive elements are easily tappable
- Optimize images for portrait orientation
- Consider adding orientation lock to prevent landscape mode
