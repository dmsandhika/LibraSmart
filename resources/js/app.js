import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { Tooltip, initTWE ,Collapse, Dropdown,
  Ripple, } from "tw-elements";
initTWE({ Collapse });
initTWE({ Tooltip });

initTWE({ Dropdown, Ripple });
