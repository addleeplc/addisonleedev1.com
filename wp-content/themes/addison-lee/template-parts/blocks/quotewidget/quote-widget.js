// quote-widget.js
(function () {
  
  const widget = document.getElementById("quote-widget");
  const tablist = document.getElementById("tablist");
  const tabs = Array.from(tablist.querySelectorAll("[role='tab']"));
  const panels = tabs.map((t) =>
    document.getElementById(t.getAttribute("aria-controls"))
  );

  /** ----------------------------
   * Dynamic Content Map (full markup injected)
   * ---------------------------- */

  const contentMap = {
    "tab-0": `<div class="mk-grid mk-grid-cols-[1fr_1fr] sm-max:mk-grid-cols-[1fr] mk-gap-[96px] sm-max:mk-gap-[30px] mk-p-[10px] mk-mb-[30px]">
            <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-3 mk-mb-6">
                <span class="pickup-pin sm-max-xs:mk-w-[41px] sm-max-xs:mk-h-[41px] sm-max:mk-mr-[-20px] mk-mr-[20px]"></span>
                  <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]"><label>PICK UP</label>
                    <input class="sm-max:mk-ml-[0px] sm-max:mk-w-[90%] md:mk-w-[100%] mk-h-[22px]" id="myInput" type="text" maxlength="100" name="pickup-form" placeholder="Enter Location" onfocus="this.value=''"><span id="sendCodeSpinner" class="spinner"></span>
                    <div id="display_errors"></div>
                    <ul id="address-search__results"></ul>
                  </div>
            </div>
            <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-3 mk-mb-6">
                <span class="dropoff-pin sm-max-xs:mk-w-[41px] sm-max-xs:mk-h-[41px] sm-max:mk-mr-[-20px] mk-mr-[20px]"></span>
                <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]"><label>DROP OFF</label>
                <input class="sm-max:mk-ml-[0px] sm-max:mk-w-[90%] md:mk-w-[100%] mk-h-[22px]" id="myInputDropOff" type="text" maxlength="100" name="dropoff-form" placeholder="Enter Location" onfocus="this.value=''">
                <span id="sendCodeSpinner" class="spinner-2"></span>
                <div id="display_errors_drop"></div>
                <ul id="address-search-dropoff__results"></ul>
                </div>
            </div>
          </div>
          
           <div class="mk-grid mk-grid-cols-[1fr_1fr] sm-max:mk-grid-cols-[1fr] mk-gap-[96px] mk-p-[10px] mk-mb-[30px]"> 
          <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-3 mk-mb-6">
            <span class="calendar-pin sm-max-xs:mk-w-[41px] sm-max-xs:mk-h-[41px] sm-max:mk-mr-[-20px] mk-mr-[20px]"></span>
              <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]"><label>DATE OF JOURNEY</label><br>
                <button id="open-calendar">ASAP</button>
                <div id="dt-widget" class="widget mk-hidden">
                <!-- your calendar markup here -->
                </div>
              </div>
          </div>
                <div class="mk-flex mk-w-[100%] col-span-2 mk-flex mk-justify-center mk-relative">
                <a href="#" id="get-a-quote" class="get-a-quote btn mk-w-[100%]">GET QUOTE</a>
                <span id="sendCodeSpinner" class="spinner-3"></span>
                </div>
          </div>
          </div>
                `, // unchanged content (omitted for brevity)
    "tab-1": `<div class="flight-number-checkbox"><input type="checkbox" id="flight-checkbox" class="flight-checkbox"><label> I don't know my flight number</label></div>
    <div class="mk-grid mk-grid-cols-[1fr_1fr] sm-max:mk-grid-cols-[1fr] mk-gap-[96px] sm-max:mk-gap-[30px] mk-p-[10px] mk-mb-[30px]">
                <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-3 mk-mb-6">
                    <span class="airport-pickup-container mk-w-[90px] sm-max:mk-mr-[-20px] mk-mr-[20px]"></span>
                    <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]"><label>FLIGHT NUMBER</label>
                      <input class="sm-max:mk-ml-[0px] sm-max:mk-w-[90%] md:mk-w-[100%]" id="my-flight-details" onfocus="this.value=''" type="text" maxlength="100" name="flight-form" placeholder="Enter flight number"><span id="sendCodeSpinner" class="spinner"></span>
                      <div id="display_errors_fl"></div>
                      <ul id="airport-arr__results"></ul>
                    </div>
                </div>
                <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-3 mk-mb-6">
                    <span class="dropoff-pin mk-w-[90px] mk-mr-[20px] sm-max:mk-mr-[-20px]"></span>
                    <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]"><label>DROP OFF</label>
                      <input class="sm-max:mk-ml-[0px] sm-max:mk-w-[90%] md:mk-w-[100%] mk-h-[22px]" id="myInputDropOffArr" type="text" maxlength="100" name="dropoff-airport-form" placeholder="Enter Location" onfocus="this.value=''">
                      <span id="sendCodeSpinner" class="spinner"></span>
                      <div id="display_errors_airdrop"></div>
                      <ul id="address-search-airport-dropoff__results"></ul>
                    </div>
                </div>
      </div>
      <div class="mk-grid mk-grid-cols-[1fr_1fr] sm-max:mk-grid-cols-[1fr] mk-gap-[96px] mk-p-[10px] mk-mb-[30px]">
            <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-3 mk-mb-6">
                <span class="calendar-pin sm-max-xs:mk-w-[41px] sm-max-xs:mk-h-[41px] sm-max:mk-mr-[-20px] mk-mr-[20px]"></span>
                <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]"><label>DATE OF FLIGHT ARRIVAL</label><br>
                <button id="flight-calendar">Select a date</button>
                <div id="dt-widget" class="widget mk-hidden">
                <!-- your calendar markup here -->
                </div>
                </div>
            </div>
            <div class="mk-flex mk-w-[100%] col-span-2 mk-flex mk-justify-center"><a href="#" id="get-a-quote" class="get-a-quote btn mk-w-[100%]">GET QUOTE</a></div>
        </div>
      </div>
    `,
    "tab-2": `<div class="mk-grid mk-grid-cols-[1fr_1fr] sm-max:mk-grid-cols-[1fr] mk-gap-[96px] sm-max:mk-gap-[30px] mk-p-[10px] mk-mb-[30px]">
            <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-2 mk-mb-6">
                <span class="pickup-pin mk-w-[90px] mk-mr-[20px] sm-max:mk-mr-[-20px]"></span>
                <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]"><label>PICK UP</label>
                  <input class="sm-max:mk-ml-[0px] sm-max:mk-w-[90%] md:mk-w-[100%] mk-h-[22px]" id="myInputCourier" type="text" maxlength="100" name="courier-form" placeholder="Enter Location" onfocus="this.value=''"><span id="sendCodeSpinner" class="spinner"></span>
                  <div id="display_errors_pick_courier"></div>
                  <ul id="courier-address-search__results"></ul>
                </div>
            </div>
            <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-2 mk-mb-6">
                <span class="dropoff-pin mk-w-[90px] mk-mr-[20px] sm-max:mk-mr-[-20px]"></span>
                  <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]"><label>DROP OFF</label>
                    <input class="sm-max:mk-ml-[0px] sm-max:mk-w-[90%] md:mk-w-[100%] mk-h-[22px]" id="myInputDropOffCourier" type="text" maxlength="100" name="courier-form" placeholder="Enter Location" onfocus="this.value=''">
                    <span id="sendCodeSpinner" class="spinner"></span>
                    <div id="display_errors_couriers"></div>
                    <ul id="address-search-courier-dropoff__results"></ul>
                  </div>
            </div>
          </div>
          <div class="mk-grid mk-grid-cols-[1fr_1fr] sm-max:mk-grid-cols-[1fr] mk-gap-[96px] mk-p-[10px] mk-mb-[30px]">
            <div class="mk-flex mk-items-center mk-border-b-[1px] mk-border-[#B4B4B4] mk-pb-3 mk-mb-6">
                <span class="calendar-pin sm-max-xs:mk-w-[41px] sm-max-xs:mk-h-[41px] sm-max:mk-mr-[-20px] mk-mr-[20px]"></span>
                <div class="form-control sm-max:mk-ml-[51px] sm-max:mk-w-[90%] md:mk-w-[100%]">
                <label>DATE OF JOURNEY</label><br>
                <button id="courier-calendar">ASAP</button>
                <div id="dt-widget" class="widget mk-hidden">
                <!-- your calendar markup here -->
                </div>
                </div>
                </div>
                <div class="mk-flex mk-w-[100%] col-span-2 mk-flex mk-justify-center"><a href="#" id="get-a-quote" class="get-a-quote btn mk-w-[100%]">GET QUOTE</a></div>
            </div>
          </div>`,
  };

  /** Panels */
  function showPanel(panel) {
    panel.classList.remove("mk-hidden");
    requestAnimationFrame(() => {
      panel.classList.add("mk-transition", "mk-duration-300");
      panel.classList.remove("mk-opacity-0");
      panel.classList.add("mk-opacity-100");
      panel.classList.add("active");
    });
  }

  function hidePanel(panel) {
    panel.classList.add("mk-transition", "mk-duration-300");
    panel.classList.remove("mk-opacity-100");
    panel.classList.remove("active");
    panel.classList.add("mk-opacity-0");
    panel.addEventListener(
      "transitionend",
      () => {
        if (panel.classList.contains("mk-opacity-0")) {
          panel.classList.add("mk-hidden");
        }
      },
      { once: true }
    );
  }

  const calendarHtml = `
  <div class="widget" id="dt-widget" role="application" aria-label="Date and time picker">
    <div id="title">DATE OF JOURNEY</div>
    <div class="header">
      <div class="month-nav">
        <button class="btn" id="prev-month" aria-label="Previous month">◀</button>
        <div class="month-title" id="month-title">March 2025</div>
        <button class="btn" id="next-month" aria-label="Next month">▶</button>
      </div>
      <div style="display:flex;gap:8px;align-items:center">
        <button class="btn" id="today-btn">Today</button>
      </div>
    </div>

    <div class="calendar" id="calendar" aria-hidden="false">
      <!-- weekdays + days go here -->
    </div>

    <div class="time-area" aria-label="Time selector">
      <div id="title">PICK UP AT</div>
      <label for="hour" style="display:none">Hour</label>
      <input type="number" id="hour" min="0" max="23" value="12" aria-label="Hour (0-23)">
      <label for="minute" style="display:none">Minute</label>
      <input type="number" id="minute" min="0" max="59" value="00" aria-label="Minute (0-59)">
      <select id="tz-select" aria-label="Timezone short name" title="Timezone (local or UTC)">
        <option value="local">Local</option>
        <option value="utc">UTC</option>
      </select>
      <div style="margin-left:auto;color:var(--muted);font-size:13px" id="selected-iso">—</div>
    </div>

    <div class="controls">
      <button class="ghost" id="clear">Clear</button>
      <button class="primary" id="confirm">Confirm</button>
    </div>

    <div class="info">Selected will be dispatched as <code>CustomEvent('date-time-selected', {detail: {iso: '...', date: Date}})</code></div>
  </div>
    `;

// calendar widget function

function initCalendarWidget(root) {
  const weekdays = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
  // grab elements within the given root
  const calendarEl = root.querySelector('#calendar');
  const monthTitle = root.querySelector('#month-title');
  const prevBtn = root.querySelector('#prev-month');
  const nextBtn = root.querySelector('#next-month');
  const todayBtn = root.querySelector('#today-btn');
  const hourInput = root.querySelector('#hour');
  const minuteInput = root.querySelector('#minute');
  const tzSelect = root.querySelector('#tz-select');
  const confirmBtn = root.querySelector('#confirm');
  const clearBtn = root.querySelector('#clear');
  const selectedIso = root.querySelector('#selected-iso');

  // internal state
  let viewYear, viewMonth;
  let selectedDate = null;

  function init() {
    const now = new Date();
    viewYear = now.getFullYear();
    viewMonth = now.getMonth();
    buildWeekdays();
    renderCalendar();

    prevBtn.addEventListener('click', () => changeMonth(-1));
    nextBtn.addEventListener('click', () => changeMonth(1));
    todayBtn.addEventListener('click', () => {
      const t = new Date();
      viewYear = t.getFullYear();
      viewMonth = t.getMonth();
      selectedDate = new Date(t.getFullYear(), t.getMonth(), t.getDate(), hourInput.value || 0, minuteInput.value || 0);
      renderCalendar();
      updateIso();
    });

    confirmBtn.addEventListener('click', onConfirm);
    clearBtn.addEventListener('click', onClear);
    hourInput.addEventListener('change', onTimeChange);
    minuteInput.addEventListener('change', onTimeChange);
    tzSelect.addEventListener('change', updateIso);

    // keyboard navigation
    root.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') { changeMonth(-1); }
      else if (e.key === 'ArrowRight') { changeMonth(1); }
      else if (e.key === 'Escape') { onClear(); }
    });
  }
  init();

  function buildWeekdays() {
    for (let i = 0; i < 7; i++) {
      const w = document.createElement('div');
      w.className = 'weekday';
      w.textContent = weekdays[i];
      calendarEl.appendChild(w);
    }
  }

  function renderCalendar() {
    while (calendarEl.children.length > 7) calendarEl.removeChild(calendarEl.lastChild);
    const monthName = new Date(viewYear, viewMonth, 1).toLocaleString(undefined, {month:'long'});
    monthTitle.textContent = `${monthName} ${viewYear}`;
    const firstDay = new Date(viewYear, viewMonth, 1);
    const startDay = firstDay.getDay();
    const daysInMonth = new Date(viewYear, viewMonth + 1, 0).getDate();

    // previous trailing days
    const prevMonthDays = startDay;
    const prevMonthLastDate = new Date(viewYear, viewMonth, 0).getDate();
    for (let i = prevMonthDays - 1; i >= 0; i--) {
      const d = prevMonthLastDate - i;
      const node = createDayNode(d, true);
      calendarEl.appendChild(node);
    }

    // current month
    for (let d = 1; d <= daysInMonth; d++) {
      const node = createDayNode(d, false);
      calendarEl.appendChild(node);
    }

    // next leading days
    const totalCells = calendarEl.children.length;
    const cellsNeeded = (Math.ceil(totalCells / 7) * 7) - totalCells;
    for (let i = 1; i <= cellsNeeded; i++) {
      const node = createDayNode(i, true);
      calendarEl.appendChild(node);
    }
  }

  function createDayNode(dayNumber, outside) {
    const el = document.createElement('button');
    el.className = 'day';
    if (outside) el.classList.add('outside');
    el.type = 'button';
    el.textContent = dayNumber;
    el.setAttribute('aria-label', (outside ? `Other month day ${dayNumber}` : `Day ${dayNumber}`));

    const today = new Date();
    const thisDate = new Date(viewYear, viewMonth, dayNumber);

    // Disable if date is in the past
    if (thisDate < new Date(today.getFullYear(), today.getMonth(), today.getDate())) {
      el.disabled = true;
      el.classList.add('disabled'); // Optional styling
    }

    // Highlight today
    if (!outside && dayNumber === today.getDate() && viewMonth === today.getMonth() && viewYear === today.getFullYear()) {
      el.classList.add('today');
    }

    // Highlight selected
    if (selectedDate && !outside && selectedDate.getFullYear() === viewYear && selectedDate.getMonth() === viewMonth && selectedDate.getDate() === dayNumber) {
      el.classList.add('selected');
    }

    el.addEventListener('click', () => {
      if (!el.disabled) {
        if (outside) {
          if (dayNumber <= 15) {
            changeMonth(1);
            setTimeout(() => selectByDate(new Date(viewYear, viewMonth, dayNumber)), 0);
          } else {
            changeMonth(-1);
            setTimeout(() => selectByDate(new Date(viewYear, viewMonth, dayNumber)), 0);
          }
        } else {
          selectByDate(new Date(viewYear, viewMonth, dayNumber));
        }
      }
    });

    el.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); el.click(); }
    });

    return el;
  }

  function selectByDate(d) {
    let h = parseInt(hourInput.value) || 0;
    let m = parseInt(minuteInput.value) || 0;
    selectedDate = new Date(d.getFullYear(), d.getMonth(), d.getDate(), h, m);

    const now = new Date();
    // If today, ensure time is not in the past
    if (d.toDateString() === now.toDateString() && selectedDate < now) {
      selectedDate = now;
      hourInput.value = now.getHours();
      minuteInput.value = now.getMinutes().toString().padStart(2, '0');
    }

    viewYear = selectedDate.getFullYear();
    viewMonth = selectedDate.getMonth();
    renderCalendar();
    updateIso();
  }

  function changeMonth(delta) {
    const today = new Date();
    const minYear = today.getFullYear();
    const minMonth = today.getMonth();

    let newMonth = viewMonth + delta;
    let newYear = viewYear;

    if (newMonth > 11) { newMonth = 0; newYear++; }
    if (newMonth < 0) { newMonth = 11; newYear--; }

    // Prevent going before current month
    if (newYear < minYear || (newYear === minYear && newMonth < minMonth)) {
      return; // Do nothing
    }

    viewMonth = newMonth;
    viewYear = newYear;
    renderCalendar();
  }

  function onTimeChange() {
      let h = parseInt(hourInput.value);
      let m = parseInt(minuteInput.value);
      if (isNaN(h) || h < 0) h = 0; if (h > 23) h = 23; hourInput.value = h;
      if (isNaN(m) || m < 0) m = 0; if (m > 59) m = 59; minuteInput.value = m.toString().padStart(2,'0');

      if (selectedDate) {
        selectedDate.setHours(h);
        selectedDate.setMinutes(m);

        const now = new Date();
        // If selected date is today and time is in the past, correct it
        if (selectedDate.toDateString() === now.toDateString() && selectedDate < now) {
          selectedDate = now;
          hourInput.value = now.getHours();
          minuteInput.value = now.getMinutes().toString().padStart(2, '0');
        }

        updateIso();
      }

  }

  function updateIso() {
    if (!selectedDate) { selectedIso.textContent = '—'; return; }
    const tz = tzSelect.value;
    let iso;
    if (tz === 'utc') {
      iso = new Date(Date.UTC(
        selectedDate.getFullYear(),
        selectedDate.getMonth(),
        selectedDate.getDate(),
        selectedDate.getHours(),
        selectedDate.getMinutes()
      )).toISOString();
    } else {
      iso = selectedDate.toISOString();
    }
    selectedIso.textContent = iso;
  }

  function formatIsoDate(iso) {
    const d = new Date(iso);
    const day = String(d.getDate()).padStart(2, "0");
    const month = d.toLocaleString("en-GB", { month: "long" });
    const year = d.getFullYear();
    return `${day} ${month} ${year}`;
  }

  function onConfirm() {
    if (!selectedDate) { alert('Please select a date.'); return; }
    const tz = tzSelect.value;
    let iso = (tz === 'utc')
      ? new Date(Date.UTC(selectedDate.getFullYear(), selectedDate.getMonth(), selectedDate.getDate(), selectedDate.getHours(), selectedDate.getMinutes())).toISOString()
      : selectedDate.toISOString();
    root.dispatchEvent(new CustomEvent('date-time-selected', {detail: {iso, date: selectedDate}}));
    confirmBtn.textContent = 'Saved ✓';
    setTimeout(() => confirmBtn.textContent='Confirm',900);
    const getDate = selectedDate;
    const updatedate = document.querySelector('button#open-calendar');
    const updateFlightCalendar = document.querySelector('button#flight-calendar');
    if(getDate){
      updatedate.innerHTML = formatIsoDate(getDate);
    }
    console.log('This is the date', getDate);
    if(getDate){
      updateFlightCalendar.innerHTML = formatIsoDate(getDate);
    }
  }

  function onClear() {
    selectedDate = null; selectedIso.textContent = '—';
    hourInput.value = '12'; minuteInput.value = '00'; renderCalendar();
    root.dispatchEvent(new CustomEvent('date-time-cleared'));
    updatedate.innerHTML = 'ASAP';
  }

  // expose programmatic API
  return {
    getSelected: () => selectedDate ? {date: selectedDate, iso: (tzSelect.value==='utc') ? new Date(Date.UTC(selectedDate.getFullYear(), selectedDate.getMonth(), selectedDate.getDate(), selectedDate.getHours(), selectedDate.getMinutes())).toISOString() : selectedDate.toISOString()} : null,
    setDateIso: (isoString) => {
      try {
        const d = new Date(isoString);
        if (isNaN(d)) throw new Error('Invalid');
        selectByDate(d);
        hourInput.value = d.getHours();
        minuteInput.value = d.getMinutes();
      }catch(e){ console.warn('setDateIso failed',e); }
    }
  };
}

/* CSS Suggestion:
.day.disabled {
  opacity: 0.4;
  cursor: not-allowed;
}
*/



/*tabs.forEach(tab => {
  tab.addEventListener('click', function () {
    activateTab(this);
  });
});
*/

 document.querySelectorAll('.tablist').forEach(tab => {
     tab.addEventListener('click', () => {
         document.querySelectorAll('.tab-panel').forEach(content => {
             content.classList.add('mk-hidden'); // hide all
         });
         const target = document.querySelector(tab.dataset.target);
         target.classList.remove('mk-hidden'); // show active
     });
 });




  /** Tab Activation */
  function activateTab(newTab) {

     // Remove active from all
    document.querySelectorAll(".tablink").forEach((t) => t.classList.remove("active"));

    // Add active to the clicked one
    newTab.classList.add("active");

    // Show its panel, etc...
    
    tabs.forEach((t) => {
      const selected = t === newTab;
      t.setAttribute("aria-selected", selected);
      t.tabIndex = selected ? 0 : -1;
      t.classList.toggle("mk-text-black", selected);
      t.classList.toggle("mk-text-slate-400", !selected);
      if (selected) {
        t.classList.add("mk-border-b-2", "mk-border-black", "mk-transition", "mk-duration-300");
      } else {
        t.classList.remove("mk-border-b-2", "mk-border-black");
      }
      t.classList.remove("mk-rounded-full");
      t.classList.add("hover:mk-text-black");
  
    });

    panels.forEach((p) => hidePanel(p));

    
    const panel = document.getElementById(newTab.getAttribute("aria-controls"));
    const contentId = "content-" + newTab.id.split("-")[1];
    document.getElementById(contentId).innerHTML = contentMap[newTab.id] || "";
    

    // logic for pick up input
    const getMyInput = document.getElementById("myInput");
    const resultsList = document.getElementById("results");

    if (getMyInput) {
    getMyInput.addEventListener("keyup",  (e) => {
      e.preventDefault();
      const currentword = getMyInput.value.trim().toLowerCase();
      const buttonSpinner = document.getElementById("sendCodeSpinner");
      if (currentword.length >= 4) {
        console.log(buttonSpinner);
        buttonSpinner.style.display = 'block';

        try {
          const response =  getPickUpApi(currentword); // Make sure this returns an array
          if (!Array.isArray(response)) {
            console.error("API response is not a valid array:", response);
            return;
          }

          removeChildDataAll();

          const filtered = response
            .filter(item => {
              const components = item?.data?.address_components;
              if (!components) return false;

              const street = components.street?.trim().toLowerCase() || "";
              const postcode = components.postcode?.trim().toLowerCase() || "";

              return street.includes(currentword) || postcode.includes(currentword);
            })
            .sort((a, b) => {
              const aStreet = a.data.address_components.street?.trim().toLowerCase() || "";
              const bStreet = b.data.address_components.street?.trim().toLowerCase() || "";

              const aPostcode = a.data.address_components.postcode?.trim().toLowerCase() || "";
              const bPostcode = b.data.address_components.postcode?.trim().toLowerCase() || "";

              const isAExact = aStreet === currentword || aPostcode === currentword;
              const isBExact = bStreet === currentword || bPostcode === currentword;

              return isBExact - isAExact; // exact matches first
            });

          displayFilteredResults(filtered);
        } catch (error) {
          console.error("Error fetching or filtering addresses:", error);
        } 
      } else {
        removeChildDataAll();
      }
    });
  }

  
function displayFilteredResults(filtered) {
    resultsList.innerHTML = "";

    if (filtered.length === 0) {
      resultsList.innerHTML = "<li>No matching addresses found.</li>";
      return;
    }

    filtered.forEach(item => {
      const li = document.createElement("li");
      li.textContent = item.data.formatted_address;
      resultsList.appendChild(li);
    });
  }


    // logic for drop off input
    const getDropoffInput = document.getElementById("myInputDropOff");
    const buttonSpinnerDrop = document.getElementById("sendCodeSpinner");
    const flightForm = document.getElementsByName('flight-form')[0];

    // logic for airport drop off
    const getDropoffAirportInput = document.getElementById("myInputDropOffArr");
        
    if(flightForm){
        flightForm.addEventListener('keyup', function(){
        const dateFormatted = new Date();
        const flightWidgetCalendar = dateFormatted.toISOString().split('T')[0];
        const flightnumber = document.getElementById('my-flight-details').value;
       
        console.log("We have the flight input",flightnumber);
          
            if (flightnumber.length >= 5 ) {                  
              getFlightDetails(flightnumber, flightWidgetCalendar);
              console.log("Passed the flight date", flightnumber, flightWidgetCalendar);   
            }
             
          
      }) 

    } 




    if(getDropoffInput) {
        getDropoffInput.addEventListener("keyup", (e) => {
        e.preventDefault();
        const currentword = document.getElementById("myInputDropOff").value;
        console.log(currentword);
            if(currentword.length){
                const buttonSpinner2 = document.getElementsByClassName('spinner-2')[0];
                console.log(buttonSpinner2);
                buttonSpinner2.style.display = 'block';
                getDropOff(currentword);
                removeChildDataDropAll();
            } else if(currentword.length < 4 ){
                removeChildDataDrop();
            }
        });
    }


    if(getDropoffAirportInput) {
        getDropoffAirportInput.addEventListener("keyup", (e) => {
        e.preventDefault();
        const currentword = document.getElementById("myInputDropOffArr").value;
        console.log(currentword);
            if(currentword.length){
                buttonSpinnerDrop.style.display = 'block';
                getAirportDropOff(currentword);
            } else if(currentword.length < 4 ){
                removeChildDataDropAll();
            }
        });
    }

    showPanel(panel);
    newTab.focus();

  

    // open calendar modal
    function openCalendarModal(triggerBtnId, calendarHtml) {
  
    const triggerBtn = document.getElementById(triggerBtnId);

    if (!triggerBtn) return;

    triggerBtn.addEventListener("click", () => {
    
    // Create modal wrapper
    
    const modal = document.createElement("div");
    modal.className = "calendar-modal mk-fixed mk-inset-0 mk-bg-black/50 mk-flex mk-justify-center mk-items-center";

    // Insert calendar HTML
    modal.innerHTML = `
      <div class="mk-bg-white mk-rounded-lg mk-p-6 mk-shadow-lg mk-relative">
        <button id="close-calendar" class="mk-absolute mk-top-2 mk-right-2">✕</button>
        ${calendarHtml}
      </div>
    `;

    document.body.appendChild(modal);

    // Initialize widget
    const widgetRoot = modal.querySelector("#dt-widget");
    const calendarApi = initCalendarWidget(widgetRoot);

    // Listen for confirm
    widgetRoot.addEventListener("date-time-selected", (e) => {
    console.log("Selected ISO:", calendarApi);
    });

    // ✅ Wire up calendar controls
    const closeBtn = modal.querySelector("#close-calendar");
    const prevBtn = modal.querySelector("#prev-month");
    const nextBtn = modal.querySelector("#next-month");
    const todayBtn = modal.querySelector("#today-btn");
    const confirmBtn = modal.querySelector("#confirm");
    const clearBtn = modal.querySelector("#clear");
    

    // Close logic
    closeBtn.addEventListener("click", () => modal.remove());
    modal.addEventListener("click", (e) => {
      if (e.target === modal) modal.remove();
    });


    // Navigation buttons
    prevBtn.addEventListener("click", () => {
      console.log("Prev month clicked");
      // your prev-month logic here
    });

    nextBtn.addEventListener("click", () => {
      console.log("Next month clicked");
      // your next-month logic here
    });

    todayBtn.addEventListener("click", () => {
      console.log("Today clicked");
      // your today logic here
    });


    // Clear button
    clearBtn.addEventListener("click", () => {
      console.log("Clear clicked");
      if (targetInputId) {
        const targetInput = document.getElementById(targetInputId);
        if (targetInput) targetInput.value = "";
      }
    });

    // Confirm button
    confirmBtn.addEventListener("click", () => {
        
      console.log("Confirm clicked");
      
      // example: grab selected day + time and write into target input
      const targetInputId = true;
      if (targetInputId) {
        const dateTest = modal.querySelector('#selected-iso'); 
        const outputDate = dateTest.textContent;
        const targetInput = document.getElementById(targetInputId);
        const hour = modal.querySelector("#hour").value;
        const minute = modal.querySelector("#minute").value;
        if (targetInput) targetInput.value = `${hour}:${minute}`;
        localStorage.setItem('Date Time', outputDate);
      }
      modal.remove();
    });

        // i dont know my flight number logic
        document.getElementById('flight-number-checkbox').addEventListener('change', (e) => {
            const test1 = document.querySelector('.item2 span');
            
            if(e.target.checked === true) {
            console.log("Checkbox is checked - boolean value: ", e.target.checked);
            test1.innerText = 'ARRIVING TO (AIRPORT)';
            document.getElementsByName('flight-form')[0].placeholder='Select airport';
            document.getElementsByName('flight-form')[0].name='arrival-form';
            document.getElementsByName('arrival-form')[0].id='arrival-form';
            document.getElementsByName('arrival-form')[0].setAttribute('onkeyup', 'getArrToAirport()');
            const testclick = document.getElementById("arrival-form").value;
            console.log('test the input fields',testclick);
            const flightDet = document.querySelector('.flight-details');
            flightDet.remove();    

            }
          
            if(e.target.checked === false) {
                console.log("Checkbox is not checked - boolean value: ", e.target.checked);
                test1.innerText = 'FLIGHT NUMBER';
                document.getElementsByName('arrival-form')[0].id='my-flight-details';
                document.getElementsByName('arrival-form')[0].name='flight-form';
                document.getElementsByName('flight-form')[0].placeholder='Enter Flight Number';
            
            }
      })
      // ends 

    });
  }
    openCalendarModal("open-calendar", calendarHtml, "choosedate");
    openCalendarModal("flight-calendar", calendarHtml, "choosedate");
    openCalendarModal("courier-calendar", calendarHtml, "choosedate");
    
} // activation closed

  /** Widget Show/Hide */
  function showWidget(trigger) {
    // Position relative to clicked CTA
    trigger.insertAdjacentElement('afterend', widget);
     
    widget.style.position = "static";
    widget.style.top = null;
    widget.style.left = null;
    

    widget.classList.remove("mk-hidden");
    requestAnimationFrame(() => {
      widget.classList.add("mk-transition", "mk-duration-300");
      widget.classList.remove("mk-opacity-0");
      widget.classList.add("mk-opacity-100");
    });

    // Auto-load first tab’s content
    activateTab(tabs[0]);
  }

  function hideWidget() {
    widget.classList.add("mk-transition", "mk-duration-300");
    widget.classList.remove("mk-opacity-100");
    widget.classList.add("mk-opacity-0");
    widget.addEventListener(
      "transitionend",
      () => {
        if (widget.classList.contains("mk-opacity-0")) {
          widget.classList.add("mk-hidden");
        }
      },
      { once: true }
    );
  }

  /** Init */
  window.addEventListener("load", () => {
      // Hide widget on load
      widget.classList.add("mk-hidden", "mk-opacity-0");
  });

        function getPrice(payload, btn = null){
           const quoteBtn = btn || document.querySelector(".get-a-quote.animate, .get-a-quote");
           if (!quoteBtn) {
            console.warn("Quote button not found in current tab.");
            return;
          }
            console.log('the price is returned',payload);

            // show initial loading state
          
            quoteBtn.textContent = "Getting your quote...";

            console.log(quoteBtn);
            const url = `${pickupSearchData.productCatalogue}`;
            fetch(url, {
                method: 'POST',
                mode: 'cors',
                headers: {
                    'x-api-key': pickupSearchData.apiEndpoint,
                    'Content-Type' : 'application/json',
                },
                body: JSON.stringify(JSON.parse(payload)),
            }).then((res) => {
                return res.json();
            }).then((data) => {        
                const dataStore = data.products;
                console.log('datastore is stored here', dataStore);
                dataStore.map(function(item ){
                    if(item.product.code === 'standard_car'){ 
                      const genPricing = `${item.price.total_charged}`;
                      const pricingEle = Math.round(genPricing * 100) / 100;
                      const img = `${item.product.image_registry}web/188x72.png`;
                      const desc =`${item.product.description}`;
                      console.log('item data is here',pricingEle);
                      localStorage.setItem('Price', pricingEle);
                      // ✅ Animate + show price in button

                    if(pricingEle){
                      setTimeout(() => {
                        quoteBtn.style.display = 'flex';
                        quoteBtn.classList.add("animate");
                        quoteBtn.innerHTML = `
                          <div class="pricing-element mk-flex mk-items-center mk-justify-center quote-container mk-mx-auto">
                            BOOK FROM  
                            <div id="price-goes-here" class="mk-text-yellow">£${pricingEle}</div>
                          </div>
                        `;
                      }, 3000);
                      
                    }
                    

                    }
                    
                })
            }).catch(err => { 
              console.error("Error fetching price:", err);
              quoteBtn.textContent = "Please try again later";
              quoteBtn.classList.remove("animate");
            });
            
        }

        function getDropOff(currentword) {
            const apiFetched = currentword;
            console.log('currentword is working', apiFetched);
            fetch(`${pickupSearchData.searchUrl}?search_string=${apiFetched}`, {
                method: 'GET',
                mode: 'cors',
                headers: {
                        /* encode key*/           
                        'x-api-key': pickupSearchData.apiEndpoint,
                },
                body: JSON.stringify()
            }).then(res => {
                if(res.statusText = "ok"){
                    console.log("SUCCESS");
                    const data = res.json();
                    console.log(data)
                    return data;
                }   
                else if(res.status = 403){
                    console.log('<div>Error 403! relook at you domain</div>')
                }
                else if(res.status = 429){
                    console.log("Error: Too many requests")
                }
                else {
                console.log("FAILED");
                }
                console.log(res.json());
            }).then((data) => {
                const buttonSpinner2 = document.getElementsByClassName('spinner-2')[0];
                buttonSpinner2.style.display = 'none';
                const dataStore = data.addresses;
                console.log('data sits in object',dataStore);
                dataStore.map(function(item){
                    const q = document.getElementById('address-search-dropoff__results');
                    const l = document.createElement('li'); 
                    const b = document.createElement('button'); 
                    const e = q.appendChild(l);
                    const d = l.appendChild(b);
                    l.setAttribute("class", "address-search__item");
                    b.setAttribute("id", "address-search__result-btn");
                    b.setAttribute("class", "address-search__result-btn__class");
                    b.setAttribute('data-id', `${item.data.formatted_address}`);
                    const p = `${item.data.formatted_address}`;
                    const id = `${item.id}`; 
                    const pcode = `${item.data.address_components.postcode}`;
                    const street = `${item.data.address_components.street}`;

                    d.innerHTML = p;
                    document.querySelector('ul#address-search-dropoff__results').style.display = 'block';
                    console.log('coming from getDropOff()',p, 'postcode:',pcode,'street:', street);


                // button on click when data is loaded for pickup
                function handleClick(e){
                    const dropOffForm = document.getElementById('myInputDropOff');
                    const { target: { dataset: {id} } } = e;

                     const postcodeRegex = /\b[A-Z]{1,2}\d{1,2}[A-Z]?\s?\d[A-Z]{2}\b/i; // UK postcode example
                      const postcode = id.match(postcodeRegex)?.[0] || null;

                      // Assuming street is everything before the postcode
                      const street_selected = postcode ? id.split(postcode)[0].trim() : null;

                    console.log(id, 'this is what is selected drop form', postcode, street_selected);
                    dropOffForm.setAttribute('value',id);
                    dropOffForm.value = id;
                    drop_address = localStorage.setItem("Car Dropoff", document.getElementById('myInputDropOff').value);        
                  localStorage.setItem('Drop Postcode', postcode);
                  localStorage.setItem('Drop Street', street_selected);

                }

                // this function handles address list selected for pickup
           
                  if(document.getElementsByClassName('address-search__item')){
                  const t = document.querySelector('#address-search-dropoff__results');
                  t.addEventListener('click', handleClick, false);
                  }

                  if(document.getElementsByClassName('.address-search__item')) {
                  const d = document.querySelector('button#address-search__result-btn');
                  d.addEventListener('click', function(e){
                      const dropoffForm = document.getElementById('myInputDropOff');
                      const { target: { dataset: {id} } } = e;
                      dropoffForm.setAttribute('value', id);
                      dropoffForm.value = id;
                      dropoff_address = localStorage.setItem("Airport Dropoff", document.getElementById('myInputDropOff').value);
                      document.querySelector('ul#address-search-dropoff__results').style.display = 'none';
                  }); 
                } 
    
                });
                
            }).catch(error => { console.log(error.message)})
        }


        function getAirportDropOff(currentword) {
            const apiFetched = currentword;
            console.log('currentword is working', apiFetched);
            fetch(`${pickupSearchData.searchUrl}?search_string=${apiFetched}`, {
                method: 'GET',
                mode: 'cors',
                headers: {
                        /* encode key*/           
                        'x-api-key': 'bd16c323-59ea-4ab3-b5ca-692308a1efdd',
                },
                body: JSON.stringify()
            }).then(res => {
                if(res.statusText = "ok"){
                    console.log("SUCCESS");
                    const data = res.json();
                    console.log(data)
                    return data;
                }   
                else if(res.status = 403){
                    console.log('<div>Error 403! relook at you domain</div>')
                }
                else if(res.status = 429){
                    console.log("Error: Too many requests")
                }
                else {
                console.log("FAILED");
                }
                console.log(res.json());
            }).then((data) => {
                const buttonSpinner2 = document.getElementsByClassName('spinner-2')[0];
                buttonSpinner2.style.display = 'none';
                const dataStore = data.addresses;
                console.log('data sits in object',dataStore);
                dataStore.map(function(item){
                    const q = document.getElementById('address-search-airport-dropoff__results');
                    //q.style.cssText ='width:100%;height:100%;position:absolute;left:0;top:0'; 
                    const l = document.createElement('li'); 
                    const b = document.createElement('button'); 
                    const e = q.appendChild(l);
                    const d = l.appendChild(b);
                    //l.setAttribute("id", "pickup-address");
                    l.setAttribute("class", "address-search__item");
                    b.setAttribute("id", "address-search__result-btn");
                    b.setAttribute("class", "address-search__result-btn__class");
                    b.setAttribute('data-id', `${item.data.formatted_address}`);
                    const p = `${item.data.formatted_address}`;
                    const id = `${item.id}`; 
                    const pcode = `${item.data.address_components.postcode}`;
                    const street = `${item.data.address_components.street}`;
                        
                    d.innerHTML = p;
                    document.querySelector('ul#address-search-airport-dropoff__results').style.display = 'block';
                    console.log('coming from these sides',p);

                
                // button on click when data is loaded for pickup
                function handleClick(e){
                    const myInputForm = document.getElementById('myInputDropOffArr');
                    const { target: { dataset: {id} } } = e;
                    const postcodeRegex = /\b[A-Z]{1,2}\d{1,2}[A-Z]?\s?\d[A-Z]{2}\b/i; // UK postcode example
                      const postcode = id.match(postcodeRegex)?.[0] || null;

                      // Assuming street is everything before the postcode
                      const street_selected = postcode ? id.split(postcode)[0].trim() : null;

                    console.log(id, 'this is what is selected drop form airport flow', postcode, street_selected);
                    myInputForm.setAttribute('value',id);
                    myInputForm.value = id;
                    drop_address = localStorage.setItem("Car Dropoff", document.getElementById('myInputDropOffArr').value);  
                    localStorage.setItem('Drop Postcode', postcode);
                    localStorage.setItem('Drop Street', street_selected);
                    document.querySelector('ul#address-search-airport-dropoff__results').style.display = 'none';
                }

                // this function handles address list selected for pickup
           
                  if(document.getElementsByClassName('address-search__item')){
                  console.log('so check it out coming from airport flow');
                  const t = document.querySelector('#address-search-airport-dropoff__results');
                  t.addEventListener('click', handleClick, false);
                  }

                  if(document.getElementsByClassName('.address-search__item')) {
                  const d = document.querySelector('#address-search__result-btn');
                  d.addEventListener('click', function(e){
                      const dropoffForm = document.getElementById('myInputDropOffArr');
                      const { target: { dataset: {id} } } = e;
                      dropoffForm.setAttribute('value', id);
                      dropoffForm.value = id;
                      dropoff_address = localStorage.setItem("Airport Dropoff", document.getElementById('myInputDropOffArr').value);
                      //document.querySelector('ul#address-search-airport-dropoff__results').style.display = 'none';
                  }); 
                } 
    
                    /*const filteredData = p.filter( o => o.formatted_address.includes(currentword));
                    d.innerHTML = filteredData.length ? getHTML(filteredData) : 'no data was returned';*/
                });
                
            }).catch(error => { console.log(error.message)})
        }


     // get pickup api
    function getPickUpApi( currentword ) {
        const apiFetched = currentword;
        const url = `${pickupSearchData.searchUrl}?search_string=${encodeURIComponent(apiFetched)}`;
          console.log('Request URL:', url);
         fetch(url, {
            method: 'GET',
            mode: 'cors',
            headers: {
                'x-api-key': pickupSearchData.apiEndpoint
            }
         }).then(res => {
            if(res.message = "ok" ){
                console.log("SUCCESS");
                 const data = res.json();
                 console.log(data)
                 return data;
            }        
            else if(res.status = 403){
                console.log('<div>Error 403! relook at you domain</div>')
            }
            else if(res.status = 429){
                console.log("Error: Too many requests")
            }
            else {
            console.log("FAILED");
            }

            console.log(res.json());
            }).then((data) => {
                const buttonSpinner = document.getElementById('sendCodeSpinner');
                buttonSpinner.style.display = 'none';
                const dataStore = data.addresses;
                console.log('data sits in object',dataStore);
            dataStore.map(function(item){
                const q = document.getElementById('address-search__results'); 
                const l = document.createElement('li'); 
                const b = document.createElement('button'); 
                const e = q.appendChild(l);
                const d = l.appendChild(b);
                l.setAttribute("class", "address-search__item");
                b.setAttribute("id", "address-search__result-btn");
                b.setAttribute("class", "address-search__result-btn__class");
                const p = `${item.data.formatted_address}`;
                const id = `${item.id}`; 
                const pcode = `${item.data.address_components.postcode}`;
                const street = `${item.data.address_components.street}`;
                
                b.setAttribute('data-id', `${item.data.formatted_address}`);
                d.innerHTML = p;
                document.querySelector('ul#address-search__results').style.display = 'block';
                console.log('coming from these sides',p, 'postcode:',pcode,'street:', street);

                // button on click when data is loaded for pickup
                function handleClick(e){
                
                    const myInputForm = document.getElementById('myInput');
                    const { target: { dataset: {id} } } = e;
                     const postcodeRegex = /\b[A-Z]{1,2}\d{1,2}[A-Z]?\s?\d[A-Z]{2}\b/i; // UK postcode example
                      const postcode = id.match(postcodeRegex)?.[0] || null;

                      // Assuming street is everything before the postcode
                      const street_selected = postcode ? id.split(postcode)[0].trim() : null;
                    console.log(id, 'this is what is selected');
                    myInputForm.setAttribute('value',id);
                    myInputForm.value = id;
                    pickup_address = localStorage.setItem("pickup_address", document.getElementById('myInput').value);
                    localStorage.setItem('Postcode', postcode);
                    localStorage.setItem('Street', street_selected);
                }

                // this function handles address list selected for pickup
           
                if(document.getElementsByClassName('address-search__item')){
                console.log('so check it out');
                const t = document.querySelector('#address-search__results');
                t.addEventListener('click', handleClick, false);
                }
    
                
            });
             
        }).catch(error => { console.log(error.message)})
    }  

 
    function getArrToAirport() {
      const currentword = document.getElementById("arrival-form").value;
      const apiFetched = currentword;
      const url = `${pickupSearchData.flightSearchUrl}?date=2025-09-11&exact_match=true&=${apiFetched}`;
      console.log('arrival form input is working', apiFetched);
      var options = {
          method: 'GET',
          mode: 'cors',
          headers: {
              'x-api-key' : pickupSearchData.apiEndpoint,
          }
      }

      fetch(url, {
          options
      }).then((response) => {
          return response.json(); 
      }).then((data) => {
          const dataStore = data.flights;
          console.log('getting ready for arrival data ',dataStore);
      }).catch( (err) => {
          console.log(err.message);
      });   

    }

    function getFlightDetails(flightnumber, flightWidgetCalendar){
    if (flightnumber != null && flightWidgetCalendar != null) {
        const apiFetched = flightnumber;
        console.log('flight function is working', flightnumber, flightWidgetCalendar);

        const options = {
            method: 'GET',
            mode: 'cors',
            headers: {
                /* encode key*/           
                'x-api-key': pickupSearchData.apiEndpoint,
            },
            body: JSON.stringify()
        }
        const url = `${pickupSearchData.flightSearchUrl}?date=${flightWidgetCalendar}&exact_match=true&flight_no=${apiFetched}`
        fetch(url, options).then(res => {
        if(res.message = 'OK'){
            console.log('SUCCESS we have flight details');
            const data = res.json();
            console.log(data);
            return data;
            }
            else if(res.status = 403){
                console.log('<div>Error 403! relook at you domain</div>')
            }
            else if(res.status = 429){
                console.log("Error: Too many requests")
            }
            else {
            console.log("FAILED");
            }
        }).then((data) => {
        const buttonSpinner = document.getElementById('sendCodeSpinner');
        buttonSpinner.style.display = 'none';
        const  dataStore = data.flights;
        console.log('flight data sits in this object', dataStore);
        dataStore.map(function(item){
            const q = document.getElementById('my-flight-details');
            console.log('getting my flight details', q);
            
                q.setAttribute('data-id', `${item.arrival.city}`);
                const arrCity = `${item.arrival.city}`;
                const air_code = `${item.arrival.airport_code}`; 
                const ex_arr_time = `${item.arrival.time}`;
                const date = new Date(ex_arr_time);
                const carrier = `${item.carrier.icao}`;
                const flightNum = `${item.flight_no}`;
                const depCity = `${item.departure.city}`;
                const terminal = `${item.arrival.terminal}`;
                document.querySelector('ul#airport-arr__results').style.display = 'block';
                console.log('coming from these sides',arrCity);
                const getFieldDetails = `<span class="mk-text-black mk-font-500 mk-pt-[10px] mk-pb-[20px] mk-text-[12px] mk-leading-[1.3]">
                Arrival at ${air_code},${terminal}, ${date}
                </span>`;
                document.querySelector('ul#airport-arr__results').innerHTML = getFieldDetails;
                localStorage.setItem('Terminal', terminal);
                const airport_terminal = localStorage.getItem('Terminal');
                const get_terminal = `Terminal, ${airport_terminal}`;
                const flightNumber = document.getElementById('my-flight-details').value;
                if(!airport_terminal){
                   console.warn("No terminal found for", flightNumber);
                  return;
                }

                if(airport_terminal){
                  
                  fetch(`${pickupSearchData.searchUrl}?search_string=${encodeURIComponent(get_terminal)}`, options).then( res =>{
                    if(res.message = "ok" ){
                      console.log("SUCCESS");
                      const data = res.json(); 
                      console.log(data);
                      return data;
                    }       
                  }).then( data => {
                    const first = data.addresses[0];
                    console.log(first);
                      //const postcode = `${first.data.address_components.postcode}`;
                      const address = `${first.data.address_components.address}`;

                      const postcodeRegex = /\b[A-Z]{1,2}\d{1,2}[A-Z]?\s?\d[A-Z]{2}\b/i; // UK postcode example

                      const postcode = address.match(postcodeRegex)?.[0] || null;

                       // Assuming street is everything before the postcode
                      const street_selected = postcode ? address.split(postcode)[0].trim() : null;

                      localStorage.setItem('Postcode', postcode);
                      localStorage.setItem('Street', street_selected);
                      localStorage.setItem('pickup_address', street_selected);

                      console.log(postcode, street_selected);
                  }).catch(err => console.log(err.message));
                }
        })        
      }).catch(error => {
          console.log(error.message);
      })
   } 
     
   
}

function getCourierDropOffApi(currentword) {
    const apiFetched = currentword;
    console.log('currentword is working', apiFetched);
    
    const url = `${pickupSearchData.searchUrl}?search_string=${apiFetched}`;
         fetch(url, {
            method: 'GET',
            mode: 'cors',
            headers: {
                'x-api-key': pickupSearchData.apiEndpoint,
            },
            body: JSON.stringify()
         }).then(res => {
            if(res.message = "ok" ){
                console.log("SUCCESS");
                 const data = res.json();
                 console.log(data)
                 return data;
            }        
            else if(res.status = 403){
                console.log('<div>Error 403! relook at you domain</div>')
            }
            else if(res.status = 429){
                console.log("Error: Too many requests")
            }
            else {
            console.log("FAILED");
            }

            console.log(res.json());
        }).then((data) => {
            const buttonSpinner = document.getElementById('sendCodeSpinner');
            buttonSpinner.style.display = 'none';
            const dataStore = data.addresses;
            console.log('data sits in object',dataStore);
            dataStore.map(function(item){
                const q = document.getElementById('address-search-courier-dropoff__results'); 
                const l = document.createElement('li'); 
                const b = document.createElement('button'); 
                const e = q.appendChild(l);
                const d = l.appendChild(b);
                l.setAttribute("class", "address-search__item");
                b.setAttribute("id", "address-search__result-btn");
                b.setAttribute("class", "address-search__result-btn__class");
                const p = `${item.data.formatted_address}`;
                const id = `${item.id}`; 
                const pcode = `${item.data.address_components.postcode}`;
                const street = `${item.data.address_components.street}`;
                
                b.setAttribute('data-id', `${item.data.formatted_address}`);
                d.innerHTML = p;
                document.querySelector('#address-search-courier-dropoff__results').style.display = 'block';
                console.log('coming from these sides',p, 'postcode:',pcode,'street:', street);

                // button on click when data is loaded for pickup
                function handleClick(e){
                
                    const myInputForm = document.getElementById('myInputDropOffCourier');
                    const { target: { dataset: {id} } } = e;
                     const postcodeRegex = /\b[A-Z]{1,2}\d{1,2}[A-Z]?\s?\d[A-Z]{2}\b/i; // UK postcode example
                      const postcode = id.match(postcodeRegex)?.[0] || null;

                      // Assuming street is everything before the postcode
                      const street_selected = postcode ? id.split(postcode)[0].trim() : null;
                    console.log(id, 'this is what is selected');
                    myInputForm.setAttribute('value',id);
                    myInputForm.value = id;
                    pickup_address = localStorage.setItem("Car Dropoff", document.getElementById('myInputDropOffCourier').value);
                    localStorage.setItem('Drop Postcode', postcode);
                    localStorage.setItem('Drop Street', street_selected);
                    document.querySelector('ul#address-search-courier-dropoff__results').style.display = 'none';
                }

                // this function handles address list selected for pickup
           
                if(document.getElementsByClassName('address-search__item')){
                console.log('so check it out');
                const t = document.querySelector('#address-search-courier-dropoff__results');
                t.addEventListener('click', handleClick, false);
                }
    
                
            });
             
        }).catch(error => { console.log(error.message)})
    }

  function getCourierPickUpApi(currentword) {
    const apiFetched = currentword;
    console.log('currentword is working', apiFetched);
    
    const url = `${pickupSearchData.searchUrl}?search_string=${apiFetched}`;
         fetch(url, {
            method: 'GET',
            mode: 'cors',
            headers: {
                'x-api-key': pickupSearchData.apiEndpoint,
            },
            body: JSON.stringify()
         }).then(res => {
            if(res.message = "ok" ){
                console.log("SUCCESS");
                 const data = res.json();
                 console.log(data)
                 return data;
            }        
            else if(res.status = 403){
                console.log('<div>Error 403! relook at you domain</div>')
            }
            else if(res.status = 429){
                console.log("Error: Too many requests")
            }
            else {
            console.log("FAILED");
            }

            console.log(res.json());
        }).then((data) => {
            const buttonSpinner = document.getElementById('sendCodeSpinner');
            buttonSpinner.style.display = 'none';
            const dataStore = data.addresses;
            console.log('data sits in object',dataStore);
            dataStore.map(function(item){
                const q = document.getElementById('courier-address-search__results'); 
                const l = document.createElement('li'); 
                const b = document.createElement('button'); 
                const e = q.appendChild(l);
                const d = l.appendChild(b);
                l.setAttribute("class", "address-search__item");
                b.setAttribute("id", "address-search__result-btn");
                b.setAttribute("class", "address-search__result-btn__class");
                const p = `${item.data.formatted_address}`;
                const id = `${item.id}`; 
                const pcode = `${item.data.address_components.postcode}`;
                const street = `${item.data.address_components.street}`;
                
                b.setAttribute('data-id', `${item.data.formatted_address}`);
                d.innerHTML = p;
                document.querySelector('#courier-address-search__results').style.display = 'block';
                console.log('coming from these sides',p, 'postcode:',pcode,'street:', street);

                // button on click when data is loaded for pickup
                function handleClick(e){
                
                    const myInputForm = document.getElementById('myInputCourier');
                    const { target: { dataset: {id} } } = e;
                     const postcodeRegex = /\b[A-Z]{1,2}\d{1,2}[A-Z]?\s?\d[A-Z]{2}\b/i; // UK postcode example
                      const postcode = id.match(postcodeRegex)?.[0] || null;

                      // Assuming street is everything before the postcode
                      const street_selected = postcode ? id.split(postcode)[0].trim() : null;
                    console.log(id, 'this is what is selected');
                    myInputForm.setAttribute('value',id);
                    myInputForm.value = id;
                    pickup_address = localStorage.setItem("pickup_address", document.getElementById('myInputCourier').value);
                    localStorage.setItem('Postcode', postcode);
                    localStorage.setItem('Street', street_selected);
                    document.querySelector('ul#courier-address-search__results').style.display = 'none';
                }

                // this function handles address list selected for pickup
           
                if(document.getElementsByClassName('address-search__item')){
                console.log('so check it out');
                const t = document.querySelector('#courier-address-search__results');
                t.addEventListener('click', handleClick, false);
                }
    
                
            });
             
        }).catch(error => { console.log(error.message)})
    }  

 

    function removeChildDataAll(){
        document.querySelector('body').addEventListener("click", function(){
            removeChildData();
        })
    }

    function removeChildData() {
        const listItems = document.querySelector('ul#address-search__results');
        while(listItems.hasChildNodes()){
            listItems.removeChild(listItems.firstChild);
            document.querySelector('ul#address-search__results').style.display = 'none';
        }   
    }

    function removeChildDataDropAll(){
        document.querySelector('body').addEventListener("click", function(){
            removeChildDataDrop();
            
        });
    }

    function removeChildAirportDataDropAll(){
        document.querySelector('body').addEventListener("click", function(){
            removeChildDataAirportDrop();
            
        });
    }

    function removeChildDataDrop() {
    const listings = document.getElementById('address-search-dropoff__results');
    while(listings.hasChildNodes()){
        listings.removeChild(listings.firstChild);
        document.getElementById('address-search-dropoff__results').style.display = 'none';        
      }  
    }
    
    function removeChildDataAirportDrop() {
      const listings = document.getElementById('address-search-airport-dropoff__results');
      while(listings.hasChildNodes()){
          listings.removeChild(listings.firstChild);
          document.querySelector('ul#address-search-airport-dropoff__results').style.display = 'none';        
      }
    }


  // Toggle widget when CTA is clicked
  document.querySelectorAll(".quote-cta").forEach((cta) => {
    cta.addEventListener("click", (e) => {
      e.preventDefault();
      if (widget.classList.contains("mk-hidden")) {
        showWidget(cta);
        localStorage.removeItem("Car Dropoff");
        localStorage.removeItem("Drop Postcode");
        localStorage.removeItem("Drop Street");
        localStorage.removeItem("Date Time");
        localStorage.removeItem("dropoff_address");
        localStorage.removeItem("Street");
        localStorage.removeItem("Postcode");
        localStorage.removeItem("Airport Dropoff");
        localStorage.removeItem("pickup_address");
        localStorage.removeItem("Price");
        localStorage.removeItem("Terminal");
        localStorage.removeItem("flight_number");
      } else {
        hideWidget();
      }
    });
  });

 

  // Keyboard navigation
  tablist.addEventListener("keydown", (e) => {
    const currentIndex = tabs.indexOf(document.activeElement);
    if (currentIndex === -1) return;
    let newIndex;
    switch (e.key) {
      case "ArrowRight":
        newIndex = (currentIndex + 1) % tabs.length;
        tabs[newIndex].focus();
        e.preventDefault();
        break;
      case "ArrowLeft":
        newIndex = (currentIndex - 1 + tabs.length) % tabs.length;
        tabs[newIndex].focus();
        e.preventDefault();
        break;
      case "Home":
        tabs[0].focus();
        e.preventDefault();
        break;
      case "End":
        tabs[tabs.length - 1].focus();
        e.preventDefault();
        break;
      case "Enter":
      case " ":
        activateTab(document.activeElement);
        e.preventDefault();
        break;
    }
  });


  // Global delegated listener for all GET QUOTE buttons
let quoteGenerated = false;
document.addEventListener("click", (e) => {
  const btn = e.target.closest(".get-a-quote"); // match any button with this class
  if (!btn) return; // clicked something else

  e.preventDefault();

  // Optional: check which tab we’re in
  const activeTab = document.querySelector(".tablink.active");
  const activePanel = document.querySelector(".tab-panel.active");

  console.log("GET A QUOTE clicked from:", activeTab?.id || "unknown tab");

  // ✅ Now trigger your quote logic
  handleQuoteClick(btn, activeTab, activePanel);
});

function getPayload() {
  const payload = ` {
      "booking": {
          "asap": true,
          "date": "${localStorage.getItem('Date Time')}",
          "payment_type": "credit_card",
          "stops": [
              {
                  "type": "ADDRESS",
                  "formatted_address": "${localStorage.getItem('pickup_address')}",
                      "location": {
                      "lat": 51.527076721191406,
                      "lon": -0.14019739627838135
                      },
                  "address_components": {
                  "postal_code": "${localStorage.getItem('Postcode')}",
                  "street_name": "${localStorage.getItem('Street')}",
                  "country": "GB",
                  "city": "London"
                  }
              },
              {
                  "type": "ADDRESS",
                  "formatted_address": "${localStorage.getItem('Car Dropoff')}",
                  "location": {
                  "lat": 51.48252544272139,
                  "lon": -0.2714334497907255
                  },
                  "address_components": {
                  "postal_code": "${localStorage.getItem('Drop Postcode')}",
                  "street_name": "${localStorage.getItem('Drop Street')}",
                  "country": "GB",
                  "city": "London"
                  }
              }
          ],
          "as_directed": false,
          "destination_unknown": false,
          "wait_and_return": false
          
          }
      }
      `;
  
  return payload;
}


document.addEventListener("click", (e) => {
  const tab = e.target.closest(".tablink");
  localStorage.removeItem('Price');
  if (!tab) return;

  // Identify the tab
  const activeId = tab.id || tab.dataset.tab;
  console.log("Clicked tab:", activeId);

  if (activeId === "tab-1") {
    // Wait a tick to ensure DOM updates are done
    setTimeout(() => {
      console.log("Clearing dropoff data...");
      localStorage.removeItem("Car Dropoff");
      localStorage.removeItem("Drop Postcode");
      localStorage.removeItem("Drop Street");
      localStorage.removeItem("Date Time");
      localStorage.removeItem("dropoff_address");
      localStorage.removeItem("Street");
      localStorage.removeItem("Postcode");
      localStorage.removeItem("Airport Dropoff");
      localStorage.removeItem("pickup_address");

    }, 50);
  }

  activateTab(tab);
});

// on keyup event for drop off courier tab
document.addEventListener('keyup', (e) => {
  const currentword = e.target.closest('#myInputDropOffCourier').value.trim();
  if(!currentword) return;

  console.log(currentword);
  if(currentword.length >= 5 ){
    getCourierDropOffApi(currentword);
  }
          
});

// on keyup event pick up courier tab
document.addEventListener('keyup', (e) => {
  const currentword = e.target.closest('#myInputCourier').value.trim();
  if(!currentword) return;

  console.log(currentword);
  if(currentword.length >= 5 ){
    getCourierPickUpApi(currentword);
  }
          
})


function redirectParams(){
  const pickup = localStorage.getItem('pickup_address');
  const dropoff = localStorage.getItem('Car Dropoff');
  const date = localStorage.getItem('Date Time');
  const price = localStorage.getItem('Price');

  if(pickup && dropoff && date && price ){
    const redirectUrl = `https://webportal2.addlee-sandbox.net/al/booking-v6/new/car?pickup=${encodeURIComponent(pickup)}&dropoff=${encodeURIComponent(dropoff)}&date=${encodeURIComponent(date)}&price=${price}`;
    window.location.href = redirectUrl;
  }
  

}


function handleQuoteClick( button, tab, panel ) {
  // Example: collect input values or run API request
  console.log("Button clicked:", button);
  console.log("Current tab:", tab?.id);
  console.log("Panel context:", panel?.id);

  const dateField = document.querySelector('button#open-calendar');
  const errorMessage = document.getElementById('display_errors');
  const errorMessage2 = document.getElementById('display_errors_drop');
  
        
  const searchbar = document.getElementById('myInput').value.trim();
  const searchBarDrpOff = document.getElementById('myInputDropOff').value.trim();

        if(tab?.id === 'tab-0'){
          const searchbar = document.getElementById('myInput').value.trim();
          const searchBarDrpOff = document.getElementById('myInputDropOff').value.trim();
          // your validation logic here
        if( !searchbar  ){ 
          errorMessage.textContent = 'Please enter a pick up address';
        }
        
        if( !searchBarDrpOff ){
          errorMessage2.textContent = 'Please enter a drop off address';
        } 
          

        if(searchbar && searchBarDrpOff){
          const payload = getPayload();
          getPrice(payload, button);
        }

        if(!quoteGenerated){
          console.log('we have the quote generated for pickup');
          quoteGenerated = true;
        } else {
          redirectParams();
        }
         
        }

        if(tab?.id === 'tab-1'){
          const flightInput = document.getElementById('my-flight-details').value.trim();
          console.log(flightInput);
          const errorMessage3 = document.getElementById('display_errors_fl');
          if(!flightInput){
            errorMessage3.textContent = 'Flight Number is required';
          } else {
            errorMessage3.textContent = '';
          }
          const dropInputForm = document.getElementById('myInputDropOffArr').value.trim();
          if(!dropInputForm){
            const errorMessage = document.getElementById('display_errors_airdrop');
            errorMessage.textContent = 'Please enter a drop off address';
          } else {
            errorMessage.textContent = '';
          }
          
          if(dropInputForm && flightInput){
            console.log('on tab-1');
            const payload = getPayload();
            getPrice(payload, button);
          }
          
          if(!quoteGenerated){
            console.log('we have the quote generated for airport flow');
            quoteGenerated = true;
          } else {
            redirectParams();
          }
        }

        if(tab?.id == 'tab-2'){
          const a = document.getElementById('myInputDropOffCourier').value.trim();
          const b = document.getElementById('myInputCourier').value.trim();
          if(!a){
            const errorMessage = document.getElementById('display_errors_couriers');
            console.log('on tab-2', errorMessage);
            errorMessage.innerText = 'Please enter a drop off address';
          }

          if(!b){
            const errorMessage = document.getElementById('display_errors_pick_courier');
            errorMessage.innerText = 'Please enter a pick up address';
          }

          if(a && b){
            const payload = `
              {
                  "booking": {
                  "asap": false,
                  "date": "${localStorage.getItem('Date Time')}",
                  "payment_type": "credit_card",
                  "stops": [
                  {
                      "type": "ADDRESS",
                      "formatted_address": "${localStorage.getItem('pickup_address')}",
                      "location": {
                      "lat": 51.527076721191406,
                      "lon": -0.14019739627838135
                      },
                      "address_components": {
                      "postal_code": "${localStorage.getItem('Postcode')}",
                          "street_name": "${localStorage.getItem('Street')}",
                      "country": "GB",
                      "city": "London"
                      }
                  },
                  {
                      "type": "ADDRESS",
                      "formatted_address": "${localStorage.getItem('Car Dropoff')}",
                      "location": {
                      "lat": 51.48252544272139,
                      "lon": -0.2714334497907255
                      },
                      "address_components": {
                      "postal_code": "${localStorage.getItem('Drop Postcode')}",
                      "street_name": "${localStorage.getItem('Drop Street')}",
                      "country": "GB",
                      "city": "London"
                      }
                  }
                  ],
                  "as_directed": false,
                  "destination_unknown": false,
                  "wait_and_return": false
              }
            }       
            `;

            button.textContent = "Getting your quote...";
           
            const url = `${pickupSearchData.productCatalogueCouriers}`;
            
            try {
              fetch(url, {
                  method: 'POST',
                  mode: 'cors',
                  headers: {
                      /* encode key */         
                      'x-api-key': pickupSearchData.apiEndpoint,
                      'Content-Type' : 'application/json'
                  },
                  body: JSON.stringify(JSON.parse(payload)),
                  
                }).then(res => {
                if(res.message = 'OK'){
                  
                    console.log('SUCCESS! courier data is available');
                    const data = res.json();
                    console.log(data);
                    return data;
                }
                else if(res.status = 403){
                        console.log('<div>Error 403! relook at you domain</div>')
                }
                else if(res.status = 429){
                        console.log("Error: Too many requests")
                }
                else {
                    console.log("FAILED");
                }
                }).then(data => {
                  
                  const dataStore = data.products;
                  console.log('courier data is here', dataStore);
                  dataStore.map(function(index){
                    const id = `${index.product.id}`;
                    const code = `${index.product.code}`;
                    const desc = `${index.product.description}`;
                    const totalcharged = `${index.price.total_charged}`;
                    const img = `${index.product.image_registry}web/std.png`;
                    localStorage.setItem('Price', totalcharged);
                    
                    if(code === 'bicycle_courier' && id === pickupSearchData.bycycleId ){
                     
                      button.classList.add("animate");
                      button.innerHTML = `
                          <div class="mk-flex mk-justify-center quote-container mk-mx-auto mk-items-center">
                            BOOK FROM  
                            <div id="price-goes-here" class="mk-text-yellow">£${totalcharged}</div>
                          </div>
                        `;
                      return; // ✅ stop here, don’t call getPrice()
                    
                    }

                  })


                })
                
              
            } catch (error) {
              console.log(error.message);
            }
            
          }

          if(!quoteGenerated){
            console.log('we have the quote generated for courier flow');
            quoteGenerated = true;
          } else {
            redirectParams();
          }

        }
      
}

})();
