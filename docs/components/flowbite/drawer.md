# Drawer Component

## Overview

The Drawer component is a customizable sliding panel that can appear from any edge of the screen. It's useful for displaying additional content, forms, or navigation options without navigating away from the current page.

## Properties

| Property | Type | Default | Description |
|----------|------|---------|-------------|
| `id` | string | 'drawer-example' | The unique identifier for the drawer |
| `position` | string | 'left' | The position from which the drawer appears ('left', 'right', 'top', 'bottom') |
| `size` | string | '80' | The size of the drawer (width for left/right, height for top/bottom) in tailwind size units |
| `title` | string | 'Info' | The title displayed at the top of the drawer |
| `showCloseButton` | boolean | true | Whether to show the close button in the top-right corner |

## Usage

### Basic Usage

```blade
<x-flowbite.drawer>
    <!-- Drawer content goes here -->
    <p>This is a basic drawer with default settings.</p>
</x-flowbite.drawer>
```

### Customizing the Drawer

```blade
<x-flowbite.drawer 
    id="custom-drawer"
    position="right"
    size="96"
    title="Settings"
    :showCloseButton="true">
    <!-- Drawer content goes here -->
    <p>This is a customized drawer appearing from the right side.</p>
</x-flowbite.drawer>
```

### Different Positions

#### Left Drawer (Default)
```blade
<x-flowbite.drawer position="left">
    <!-- Content -->
</x-flowbite.drawer>
```

#### Right Drawer
```blade
<x-flowbite.drawer position="right">
    <!-- Content -->
</x-flowbite.drawer>
```

#### Top Drawer
```blade
<x-flowbite.drawer position="top">
    <!-- Content -->
</x-flowbite.drawer>
```

#### Bottom Drawer
```blade
<x-flowbite.drawer position="bottom">
    <!-- Content -->
</x-flowbite.drawer>
```

### Triggering the Drawer

To trigger the drawer, use a button with the appropriate data attributes:

```blade
<button 
    type="button" 
    data-drawer-target="drawer-example" 
    data-drawer-show="drawer-example" 
    aria-controls="drawer-example">
    Show Drawer
</button>
```

Replace `drawer-example` with your custom drawer ID if you've set one.

## Integration with Forms

The drawer component works well with forms and other interactive elements:

```blade
<x-flowbite.drawer title="Contact Form">
    <form>
        <x-input
            required
            label="Name"
            placeholder="Enter your name"
        />

        <x-input
            required
            type="email"
            label="Email"
            placeholder="Enter your email"
        />

        <x-button primary type="submit" label="Submit"/>
    </form>
</x-flowbite.drawer>
```

## Styling

The drawer uses the `data-drawer-placement` attribute for positioning and Tailwind CSS classes for styling. The component automatically handles the positioning and sizing based on the properties you provide.

For left and right drawers, the width is controlled by the `size` property, while the height is set to full screen.
For top and bottom drawers, the height is controlled by the `size` property, while the width is set to full screen.

## Accessibility

The drawer component includes proper ARIA attributes for accessibility. The close button includes a screen reader text "Close menu" to ensure it's accessible to all users.
