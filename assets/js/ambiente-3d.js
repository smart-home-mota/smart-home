(function () {
  const viewer = document.getElementById('panoramaViewer');
  const image = document.getElementById('panoramaImage');
  const roomChips = Array.from(document.querySelectorAll('.room-chip'));
  const currentRoom = document.getElementById('currentRoom');

  if (!viewer || !image) {
    return;
  }

  let isDragging = false;
  let startX = 0;
  let startY = 0;
  let offsetX = 0;
  let offsetY = 0;
  let imageWidth = 0;
  let imageHeight = 0;
  let currentSource = image.getAttribute('src');

  function clamp(value, min, max) {
    return Math.min(max, Math.max(min, value));
  }

  function applyTransform() {
    image.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
  }

  function getBounds() {
    const minX = Math.min(0, viewer.clientWidth - imageWidth);
    const minY = Math.min(0, viewer.clientHeight - imageHeight);

    return { minX, minY, maxX: 0, maxY: 0 };
  }

  function fitImage() {
    const viewerWidth = viewer.clientWidth;
    const viewerHeight = viewer.clientHeight;

    if (!viewerWidth || !viewerHeight || !image.naturalWidth || !image.naturalHeight) {
      return;
    }

    const coverScale = Math.max(
      viewerWidth / image.naturalWidth,
      viewerHeight / image.naturalHeight
    );

    const interactiveScale = coverScale * 1.18;

    imageWidth = image.naturalWidth * interactiveScale;
    imageHeight = image.naturalHeight * interactiveScale;

    image.style.width = `${imageWidth}px`;
    image.style.height = `${imageHeight}px`;

    const bounds = getBounds();

    offsetX = (viewerWidth - imageWidth) / 2;
    offsetY = (viewerHeight - imageHeight) / 2;

    offsetX = clamp(offsetX, bounds.minX, bounds.maxX);
    offsetY = clamp(offsetY, bounds.minY, bounds.maxY);

    applyTransform();
  }

  function startDrag(clientX, clientY) {
    isDragging = true;
    viewer.classList.add('is-dragging');
    startX = clientX - offsetX;
    startY = clientY - offsetY;
  }

  function moveDrag(clientX, clientY) {
    if (!isDragging) {
      return;
    }

    const bounds = getBounds();
    offsetX = clamp(clientX - startX, bounds.minX, bounds.maxX);
    offsetY = clamp(clientY - startY, bounds.minY, bounds.maxY);

    applyTransform();
  }

  function endDrag() {
    isDragging = false;
    viewer.classList.remove('is-dragging');
  }

  function setActiveChip(activeChip) {
    roomChips.forEach(function (chip) {
      chip.classList.toggle('active', chip === activeChip);
    });
  }

  function changeRoom(chip) {
    const nextSource = chip.getAttribute('data-src');
    const roomName = chip.getAttribute('data-room') || 'Ambiente';

    if (!nextSource || nextSource === currentSource) {
      setActiveChip(chip);
      if (currentRoom) {
        currentRoom.textContent = roomName;
      }
      return;
    }

    currentSource = nextSource;
    image.setAttribute('src', nextSource);
    image.setAttribute('alt', `${roomName} interativo`);
    setActiveChip(chip);

    if (currentRoom) {
      currentRoom.textContent = roomName;
    }
  }

  viewer.addEventListener('mousedown', function (event) {
    startDrag(event.clientX, event.clientY);
  });

  window.addEventListener('mousemove', function (event) {
    moveDrag(event.clientX, event.clientY);
  });

  window.addEventListener('mouseup', endDrag);
  viewer.addEventListener('mouseleave', endDrag);

  viewer.addEventListener('touchstart', function (event) {
    const touch = event.touches[0];
    startDrag(touch.clientX, touch.clientY);
  }, { passive: true });

  viewer.addEventListener('touchmove', function (event) {
    if (!isDragging) {
      return;
    }

    const touch = event.touches[0];
    moveDrag(touch.clientX, touch.clientY);
    event.preventDefault();
  }, { passive: false });

  viewer.addEventListener('touchend', endDrag);
  viewer.addEventListener('touchcancel', endDrag);

  roomChips.forEach(function (chip) {
    chip.addEventListener('click', function () {
      changeRoom(chip);
    });
  });

  image.addEventListener('load', fitImage);
  window.addEventListener('resize', fitImage);

  if (image.complete) {
    fitImage();
  }
})();
