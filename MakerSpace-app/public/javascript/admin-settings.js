let states = {};

function toggleColor(btn) {
  const id = btn.id;
  states[id] = !states[id];
  btn.style.backgroundColor = states[id] ? 'green' : 'red';
  btn.textContent = states[id] ? 'Enabled' : 'Disabled';
}