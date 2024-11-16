import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { Tooltip, initTWE ,Collapse, Dropdown,
  Ripple, Input, } from "tw-elements";
initTWE({ Collapse });
initTWE({ Tooltip, Input });

initTWE({ Dropdown, Ripple });
